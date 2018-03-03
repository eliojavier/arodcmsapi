<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Database\Eloquent\Collection;

class WebArticleController extends Controller
{
    public function index()
    {
        $categories = Category::active()->select('id', 'name')->get();

        $results = new Collection();
        foreach ($categories as $category) {
            $results->push(Category::where('id', $category->id)
                ->with(['articles' => function ($query) {
                    $query->active()->orderBy('created_at', 'desc')->take(5);
                }])->get());
        }

        $categoryWithArticles =[];
        foreach($results as $result) {
            foreach ($result as $category) {
                array_push($categoryWithArticles, $category);
            }
        }

        $results = new Collection();
        foreach ($categories as $category) {
            $results->push(Category::where('id', $category->id)
                ->with(['articles' => function ($query) {
                    $query->active()->orderBy('created_at', 'desc')->take(1);
                }])->get());
        }

        $header_articles =[];
        foreach($results as $result) {
            foreach ($result as $category) {
                array_push($header_articles, $category);
            }
        }

        return view('app.articles.home', ['categories' => $categoryWithArticles, 'header_articles' => $header_articles]);
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
        $cat = Category::wherePermalink($category)->first();
        $articles = Article::whereHas('categories', function ($q) use($category) {
            $q->wherePermalink($category);
        })->latest()->active()->paginate(10);

        return view ('app.articles.articlesByCategory', ['articles' => $articles, 'category' =>$cat->name]);
    }

//    public function articlesByCategoryPaginated($category, $page)
//    {
//        $category = Category::where('name', $category)->first();
//        return view ('app.articles.articlesByCategory', ['result' => $category->with('articles')->paginate(10)]);
//    }
}
