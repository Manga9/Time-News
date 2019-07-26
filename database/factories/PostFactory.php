<?php

use App\Post;
use Faker\Generator as Faker;
use App\Category;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'  => $faker->sentence,
        'body'   => $faker->text,
        'image'  =>  'http://lorempixel.com/400/200',
        'category_id' => function() { return Category::all()->random(); }
    ];
});
