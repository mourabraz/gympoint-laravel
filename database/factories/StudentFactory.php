<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'weight' => $faker->randomFloat(2, 25, 120),
        'height' => $faker->randomFloat(2, 1.15, 2.20),
        'birthday_at' => $faker->dateTimeBetween('-50 years', '-10 years', null)
    ];
});
