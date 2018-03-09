<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Lesson::class, function (Faker $faker) {
    $series_id = App\Models\Series::pluck('id')->random();

    return [
        'series_id' => $series_id,
        'title' => $faker->sentence,
        'body' => $faker->text
    ];
});
