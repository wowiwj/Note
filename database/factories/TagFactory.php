<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Tag::class, function (Faker $faker) {

    $name = $faker->name;

    return [
        'name' => $name,
        'slug' => str_slug($faker->name),
        'message' => $faker->sentence
    ];
});
