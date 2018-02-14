<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $articles = Article::active()->get();
        return view ('welcome', ['articles' => $articles]);
    }
}
