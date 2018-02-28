<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Article::class, function (Faker $faker) {

    $user_id = App\Models\User::pluck('id')->random();
    $category_id = App\Models\Category::pluck('id')->random();
    $title = $faker->sentence;

    return [
        'user_id' => $user_id,
        'category_id' => $category_id,
        'title' => $title,
        'slug' => mt_rand(0,4) > 2 ? str_slug($title) : null,
        'content' => $faker->paragraph
    ];
});