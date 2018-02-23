<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class WebArticleController extends Controller
{
    public function index()
    {
        $categories = Category::active()->select('id', 'name')->get();
        $result = new Collection();
        foreach ($categories as $category) {
            $result->push(Category::where('id', $category->id)
                ->with(['articles' => function ($query) {
                    $query->active()->latest()->take(5);
                }])->get());
        }

        $categories = Category::active()->select('id', 'name')->take(6)->get();
        $header_categories = new Collection();
        foreach ($categories as $category) {
            $header_categories->push(Category::where('id', $category->id)
                ->with(['articles' => function ($query) {
                    $query->active()->latest()->take(1);
                }])->get());
        }

        $header_categories = new Collection();
        foreach ($categories as $category) {
            $header_categories->push(Article::latest()
                ->with(['categories' => function ($query) use($category) {
                    $query->active()->where('categories.id', $category->id)->first();
                }])->first());
        }

        $header_articles = new Collection();
        foreach ($categories as $category) {
            $header_articles->push(Article::
            with(['categories' => function ($query) use($category) {
                $query->active()->where('categories.id', $category->id)->first();
            }])->first());
        }

//        $header_articles = new Collection();
//        foreach ($categories as $category) {
//            $header_categories->push(Article::whereHas('categories', function ($query) use ($category) {
//                $query->active()->where('articles_category.id', $category->id);
//            }))->first();
//        }
//        dd($header_articles);

        return view('app.articles.home', ['result' => $result, 'header_articles' => $header_articles]);
    }

    public function show($permalink)
    {
        $article = Article::where('permalink', $permalink)->first();
        $result = Category::where('id', $article->categories[0]->id)
            ->with(['articles' => function ($query) use ($article) {
                $query->where('articles.id', '!=', $article->id)
                    ->take(3)
                    ->latest();
            }])
            ->get();

        return view('app.articles.show', ['article' => $article,
                                                'related_articles' => $result[0]]);

    }

    public function articlesByCategory($category)
    {
        $articles = Article::whereHas('categories', function ($q) use($category) {
            $q->whereName($category);
        })->latest()->active()->paginate(10);

        return view ('app.articles.articlesByCategory', ['articles' => $articles]);
    }

//    public function articlesByCategoryPaginated($category, $page)
//    {
//        $category = Category::where('name', $category)->first();
//        return view ('app.articles.articlesByCategory', ['result' => $category->with('articles')->paginate(10)]);
//    }
}
