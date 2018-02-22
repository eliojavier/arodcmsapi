<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class WebArticleController extends Controller
{
    public function index()
    {
//        $articles = Article::active()->get();
//        return view ('app.articles.index', ['articles' => $articles]);

        $categories = Category::select('id', 'name')->get();
        dd($categories);
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
}
