<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Series::class, function (Faker $faker) {

    $skill_id = App\Models\Skill::pluck('id')->random();
    $user_id = \App\Models\User::pluck('id')->random();


    return [
        'skill_id' => $skill_id,
        'user_id' => $user_id,
        'title' => $faker->sentence,
        'banner' => $faker->imageUrl(),
        'body' => $faker->text
    ];
});
