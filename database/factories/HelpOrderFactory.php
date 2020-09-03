<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\HelpOrder;
use App\Models\Student;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(HelpOrder::class, function (Faker $faker) {
    $random = $faker->randomDigit() % 2;
    $answer = $random === 0 ? null : $faker->sentences(4, true);
    $answer_at = $answer ? $faker->dateTimeBetween('-5 days', 'now', null) : null;

    return [
        'student_id' => function () {
            return factory(Student::class)->create()->id;
        },
        'question' => $faker->sentences(2, true),
        'answer' => $answer,
        'answer_at' => $answer_at
    ];
});
