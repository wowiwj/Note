<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Reply::class, function (Faker $faker) {

    $user_id = App\Models\User::pluck('id')->random();
    $article_id = App\Models\Article::pluck('id')->random();
    return [
        'user_id' => $user_id,
        'article_id' => $article_id,
        'body' => $faker->paragraph
    ];
});