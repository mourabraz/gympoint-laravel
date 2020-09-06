<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Student::class, 50)->create();

        // ->each(function ($user) {
        //     $user->posts()->save(factory(App\Post::class)->make());
        // });
    }
}
