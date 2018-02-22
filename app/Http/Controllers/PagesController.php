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

        $result = new Collection();
        foreach ($categories as $category) {
            $result->push(Category::where('id', $category->id)
                                        ->with(['articles' => function ($query) {
                                            $query->active()->latest()->take(5);
                                        }])->get());
        }
//        return response()->json(['categories' => $articles]);
//        dd($articles->toJson());
        return view('welcome', ['result' => $result]);
    }
}
