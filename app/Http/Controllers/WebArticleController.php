<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class WebArticleController extends Controller
{
    public function index()
    {
        $articles = Article::active()->get();
        return view ('app.articles.index', ['articles' => $articles]);
    }

    public function show($permalink)
    {
        $article = Article::where('permalink', $permalink)->first();
        return view ('app.articles.show', ['article' => $article]);
    }
}
