<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'activated' => 1,
        'avatar' => $faker->imageUrl(200,200),
    ];
});

$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => $name,
    ];
});

$factory->define(App\Models\Article::class, function (Faker\Generator $faker) {

    $user_id = App\Models\User::pluck('id')->random();
    $category_id = App\Models\Category::pluck('id')->random();
    return [
        'user_id' => $user_id,
        'category_id' => $category_id,
        'title' => $faker->sentence,
        'content' => $faker->paragraph
    ];
});

$factory->define(App\Models\Reply::class, function (Faker\Generator $faker) {

    $user_id = App\Models\User::pluck('id')->random();
    $article_id = App\Models\Article::pluck('id')->random();
    return [
        'user_id' => $user_id,
        'article_id' => $article_id,
        'body' => $faker->paragraph
    ];
});

//$factory->define(App\Models\Tag::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->name,
//        'slug' => $faker->name,
//        'message' => $faker->sentence
//    ];
//});


$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {

    $user_id = App\Models\User::pluck('id')->random();
    $article_id = App\Models\Article::pluck('id')->random();

    $type = "App\Models\Article";

    return [
        'user_id' => $user_id,
        'commentable_id' => $article_id,
        'commentable_type' => $type,
        'content' => $faker->paragraph
    ];
});






