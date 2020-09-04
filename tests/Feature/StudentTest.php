<?php

namespace Tests\Feature;

use App\Models\Student;
use App\User;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function an_anonimous_user_can_not_route_students()
    {
        $response = $this->get('/students');

        // code status 302
        // redirect to /login
        // throw error message Unauthenticated.

        $response->assertStatus(302);
    }

    /** @test */
    public function a_student_can_not_route_students()
    {
        $user = factory(User::class)->create([
            'role' => 'student'
        ]);

        $this->be($user);

        $response = $this->get('/students');

        // code status 302
        // redirect to /login

        $response->assertStatus(302);
    }

    /** @test */
    public function an_admin_can_view_all_students()
    {
        $user = factory(User::class)->create([
            'role' => 'admin'
        ]);

        $this->be($user);

        $list = factory(Student::class, 2)->create();

        $response = $this->get('/students');

        $response->assertStatus(200)
            ->assertSee($list[0]->user->name)
            ->assertSee($list[1]->user->name);
    }

    /** @test */
    public function an_admin_can_view_one_student()
    {
        $user = factory(User::class)->create([
            'role' => 'admin'
        ]);

        $this->be($user);

        $list = factory(Student::class, 2)->create();

        $response = $this->get('/students/' . $list[0]->id);

        $response->assertStatus(200)
            ->assertSee($list[0]->user->name);
    }
}
