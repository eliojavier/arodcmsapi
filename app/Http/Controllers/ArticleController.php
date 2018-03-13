<?php

namespace App\Http\Controllers;

use App\Article;
use App\Error;
use App\User;
use Exception;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $user = User::findUserByToken($request->user()->id);

        if ($exists = $user->roles->contains('name', 'superadmin') ||
            $exists = $user->roles->contains('name', 'editor')) {

            $articles = Article::where('status', '!=', 'inactive')->get();

            foreach ($articles as $article) {
                $user_id = $article->user->id;
                $total = Article::where('user_id', $user_id)->count();
                $article->total = $total;
            }

            $total_articles = Article::where('status', '!=', 'inactive')->count();

            return response()->json(['articles' => $articles->load('user', 'categories'),
                                    'total_articles' => $total_articles]);
        } else if ($exists = $user->roles->contains('name', 'writer')) {
            return response()->json(['articles' => $user->articles->load('user', 'categories')]);
        }

        return response()->json(['articles' => 'no results found']);
    }

    public function store(Request $request)
    {
        $user = User::findUserByToken($request->user()->id);

        try {
            $article = new Article();
            $article->title = $request->title;
            $article->permalink = $request->permalink != null ? $request->permalink : str_slug($request->title);
            $article->body = $request->body;
            $article->seo_title = $request->seo_title;
            $article->seo_description = $request->seo_description;
            $article->keywords = $request->keywords;
            $article->status = 'preview';
            $article->user_id = $user->id;
            $article->save();
            $article->categories()->sync($request->category);

            SitemapGenerator::create('http://blog.alonsorodriguez.org')
                ->getSitemap()
                ->writeToFile('sitemap.xml');

            return response()->json(['success' => true,
                'msg' => 'article stored',
                'id' => $article->id]);
        }
        catch(Exception $exception) {
            $error = new Error();
            $error->user_id = $user->id;
            $error->user_name = $user->name;
            $error->message = $exception->getMessage();
            $error->exception = $exception;
            $error->save();
            return response()->json(['success' => false,
                'msg' => $exception->getMessage()])->setStatusCode(500);
        }

    }

    public function storeImage(Request $request, Article $article)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'sometimes|mimes:jpg,jpeg,png,mp4,avi'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false,
                'error' => 'extension not allowed'])
                ->setStatusCode(400);
        }
        if (is_file($request->image)) {
            if ($article->img_url != null) {
                $this->deleteImage($article->img_url);
            }

            $file = $request->image;
            $base_path = 'images/articles';
            $server_path = 'http://' . $_SERVER['HTTP_HOST'] . '/';
            $filename = strtolower($file->getClientOriginalName());
            $file->move($base_path, $filename);

            $article->img_url = strtolower($server_path . $base_path . "/" . $filename);
            $article->img_name = $filename;
            $article->update();

            return response()->json(['success' => true,
                                    'message' => 'multimedia created']);
        }

        return response()->json(['success' => false,
            'error' => 'request without file, multimedia not created'])
            ->setStatusCode(400);
    }

    public function deleteImage($path)
    {
        $current_img_path = $path;
        $split = explode('/', $current_img_path);
        $file_to_delete = 'images/articles' . $split[5];
        File::delete($file_to_delete);
    }

    public function show(Article $article)
    {
        return response()->json(['article' => $article->load('categories', 'user')]);
    }

    public function getByPermalink($permalink)
    {
        $article = Article::where('permalink', $permalink)->first();
        return response()->json(['article' => $article->load('categories', 'user')]);
    }

    public function getByPermalinkTest()
    {
        $article = Article::where('id', 1)->first();
        return response()->json(['article' => $article->load('categories', 'user')]);
    }

    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->permalink = $request->permalink;
        $article->body = $request->body;
        $article->seo_title = $request->seo_title;
        $article->seo_description = $request->seo_description;
        $article->keywords = $request->keywords;
        $article->update();
        $article->categories()->sync($request->category);

        return response()->json(['success' => true,
                                'msg' => 'article updated',
                                'id' => $article->id]);

    }

    public function updateVisibility(Article $article)
    {
        $article->visibility = $article->visibility == 'private' ? 'public' : 'private';
        $article->update();

        return response()->json(['success' => true, 'msg' => 'article updated']);
    }

    public function publish(Article $article)
    {
        $article->status = 'active';
        $article->update();

        return response()->json(['success' => true, 'msg' => 'article published']);
    }


    public function destroy(Article $article)
    {
        $article->status = 'inactive';
        $article->title = $article->title . '_' . str_random(10);
        $article->update();

        return response()->json(['success' => true, 'msg' => 'article destroyed']);
    }
}
