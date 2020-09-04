<?php

namespace Tests\Unit;

use App\Models\Student;
use App\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class StudentTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_has_an_user()
    {
        $student = factory(Student::class)->create();


        $this->assertInstanceOf(User::class, $student->user);
    }
}
