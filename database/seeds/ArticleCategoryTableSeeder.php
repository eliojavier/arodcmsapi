<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleCategoryTableSeeder extends Seeder
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
            $article->categories()->attach([$faker->numberBetween($min = 1, $max = 6)]);
        }
    }
}
