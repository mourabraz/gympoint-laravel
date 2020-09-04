<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('user')->latest()->get();

        return view('students.index', compact('students'));
    }

    public function show(Student $student)
    {
        $student = Student::with('user')->findOrFail($student->id);

        return view('students.show', compact('student'));
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
