<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('user')->latest()->get();

        return $students;
    }

    public function show(Student $student)
    {
        return $student;
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function edit(Student $student)
    {
        return $student;
    }

    public function update(Student $student)
    {
        return $student;
    }

    public function destroy(Student $student)
    {
        return $student;
    }
}
