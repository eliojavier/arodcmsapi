<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $categories = Category::active()->select('id', 'name')->get();

        $articles = new Collection();
        foreach ($categories as $category) {
            $articles->push(Category::where('id', $category->id)
                                        ->with(['articles' => function ($query) {
                                            $query->active()->latest()->take(5);
                                        }])->get());
        }
//        return response()->json(['categories' => $articles]);
        return view('welcome', ['categories' => $articles]);
    }
}
