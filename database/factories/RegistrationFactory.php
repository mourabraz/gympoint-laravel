<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Plan;
use App\Models\Registration;
use App\Models\Student;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Registration::class, function (Faker $faker) {
    $student = factory(Student::class)->create();
    $plan = factory(Plan::class)->create();
    $price = $plan->duration * $plan->price;

    $years = $faker->shuffle(array(1, 2, 3))[0];

    $start_at = $faker->dateTimeBetween('-' . $years . ' years', 'now', null);
    $end_at = new Carbon($start_at);
    $end_at->addMonths($plan->duration);

    return [
        'student_id' => $student->id,
        'plan_id' => $plan->id,
        'price' => $price,
        'start_at' => $start_at,
        'end_at' => $end_at
    ];
});
