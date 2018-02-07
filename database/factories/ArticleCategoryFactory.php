<?php

use Faker\Generator as Faker;

$factory->define(App\ArticleCategory::class, function (Faker $faker) {
    return [
        'article_id' => $faker->numberBetween(1,25),
        'category_id' => $faker->numberBetween(1,8),
    ];
});
