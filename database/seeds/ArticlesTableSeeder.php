<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        $articles = Article::all();
        foreach ($articles as $article){
            $article->permalink = str_slug($article->title, '-');
            $article->seo_title = $article->title;
            $article->update();
        }
    }
}
