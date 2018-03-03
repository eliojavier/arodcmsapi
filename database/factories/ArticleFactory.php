<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->realText($maxNbChars = 7500, $indexSize = 2),
        'img_url' => $faker->imageUrl(),
        'seo_description' => $faker->sentence,
        'keywords' => $faker->word . ', ' . $faker->word . ', ' . $faker->word,
        'user_id' => 1
    ];
});
