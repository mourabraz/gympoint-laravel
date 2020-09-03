<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Plan;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Plan::class, function (Faker $faker) {
    $duration = $faker->shuffle(array(1, 3, 6, 12))[0];
    $price = $duration * $faker->shuffle(array(9.99, 15.99, 19.99))[0];

    return [
        'title' => $faker->sentence(),
        'duration' => $duration,
        'price' => $price
    ];
});
