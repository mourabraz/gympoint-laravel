<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Carlos Filipe de Moura Braz',
            'email' => 'cfmb@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Maria José dos Campos Fidalgo',
            'email' => 'mjcf@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin'
        ]);
    }
}
