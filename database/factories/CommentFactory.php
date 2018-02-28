<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Comment::class, function (Faker $faker) {

    $user_id = App\Models\User::pluck('id')->random();

    $types = [
        \App\Models\Article::class,
        \App\Models\Discussion::class
    ];

    $type = $types[random_int(0,1)];
    $type_id = $type::pluck('id')->random();
    return [
        'user_id' => $user_id,
        'commentable_id' => $type_id,
        'commentable_type' => $type,
        'content' => $faker->paragraph
    ];
});