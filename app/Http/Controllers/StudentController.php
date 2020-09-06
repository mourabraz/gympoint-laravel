<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\User;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('user')->latest()->orderBy('id')->get();

        return view('students.index', compact('students'));
    }

    public function show(Student $student)
    {
        $student = Student::with('user')->findOrFail($student->id);

        return view('students.show', compact('student'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'       => 'required|unique:users,email',
            'name'        => 'required',
            'weight'      => 'required',
            'height'      => 'required',
            'birthday_at' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;

        $dirty_pass = base64_encode(openssl_random_pseudo_bytes(8));
        $pass = substr(str_replace(['/', '+', '='], ['', '', ''], $dirty_pass), 0, 8);

        $user->password = bcrypt($pass);

        if ($user->save()) {
            $student = new Student();
            $student->weight = $request->weight;
            $student->height = $request->height;
            $student->birthday_at = $request->birthday_at;

            $user->student()->save($student);
        }

        return redirect('/students/' . $user->student->id);
    }

    public function edit(Student $student)
    {
        $student = Student::with('user')->findOrFail($student->id);

        return view('students.edit', compact('student'));
    }

    public function update(Student $student)
    {
        $this->validate(request(), [
            'email'       => 'required|unique:users,email,' . $student->user_id,
            'name'        => 'required',
            'weight'      => 'required',
            'height'      => 'required',
            'birthday_at' => 'required',
        ]);

        $user = User::findOrFail($student->user_id);

        $user->name = request('name');
        $user->email = request('email');

        if ($user->save()) {
            $student->weight = request('weight');
            $student->height = request('height');
            $student->birthday_at = request('birthday_at');

            $user->student()->save($student);
        }

        return redirect('/students/' . $student->id);
    }
}
