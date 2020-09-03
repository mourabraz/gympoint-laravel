<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Checkin;
use App\Models\Registration;
use App\Models\Student;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Checkin::class, function (Faker $faker) {
    $student = factory(Student::class)->create();
    $registration = factory(Registration::class)->create([
        'student_id' => $student->id
    ]);


    $created_at = $faker->dateTimeBetween(
        $registration->start_at,
        $registration->end_at,
        null
    );

    return [
        'student_id' => $student->id,
        'created_at' => $created_at,
        'updated_at' => $created_at
    ];
});
