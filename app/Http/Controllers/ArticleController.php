<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $user = User::findUserByToken($request->user()->id);

        if ($exists = $user->roles->contains('name', 'superadmin') ||
            $exists = $user->roles->contains('name', 'editor')) {

            $articles = Article::all();
            return response()->json(['articles' => $articles]);
        } else if ($exists = $user->roles->contains('name', 'writer')) {
            return response()->json(['articles' => $user->articles]);
        }

        return response()->json(['articles' => 'no results found']);
    }

    public function store(Request $request)
    {
        $user = User::findUserByToken($request->user()->id);

        $article = new Article();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->user_id = $user->id;
        $article->save();
        $article->categories()->sync($request->categories);

        return response()->json(['success' => true, 'msg' => 'article stored']);
    }

    public function show(Article $article)
    {
        return response()->json(['article' => $article]);
    }

    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->body = $request->body;
        $article->update();
        $article->categories()->sync($request->categories);

        return response()->json(['success' => true, 'msg' => 'article updated']);
    }

    public function updateVisibility(Article $article)
    {
        $article->visibility = $article->visibility == 'private' ? 'public' : 'private';
        $article->update();

        return response()->json(['success' => true, 'msg' => 'article updated']);
    }


    public function updateStatus(Article $article)
    {
        $article->status = $article->status == 'active' ? 'inactive' : 'active';
        $article->update();

        return response()->json(['success' => true, 'msg' => 'article updated']);
    }
}
