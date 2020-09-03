<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        //
    }

    public function store()
    {
        //
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
