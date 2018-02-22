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

        return view('welcome', ['result' => $result, 'header_articles' => $header_articles]);
    }
}
