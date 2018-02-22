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
        dd ($categories);
    }

    public function show($permalink)
    {
        $article = Article::where('permalink', $permalink)->first();
        return view ('app.articles.show', ['article' => $article]);
    }
}
