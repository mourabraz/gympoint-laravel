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
            'email'       => 'required|email|unique:users,email',
            'name'        => 'required',
            'weight'      => 'required|regex:/^\d{2,3}[\.,]\d{0,2}$/',
            'height'      => 'required|regex:/^\d{1,2}[\.,]\d{0,2}$/',
            'birthday_at' => 'required|regex:/^\d{2}\/\d{2}\/\d{4}$/',
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

            $birthdayArray = explode('/', $request->birthday_at);
            $student->birthday_at = $birthdayArray[2] . '-' . $birthdayArray[1] . '-' . $birthdayArray[0];

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
            'email'       => 'required|email|unique:users,email,' . $student->user_id,
            'name'        => 'required',
            'weight'      => 'required|regex:/^\d{2,3}[\.,]\d{0,2}$/',
            'height'      => 'required|regex:/^\d{1,2}[\.,]\d{0,2}$/',
            'birthday_at' => 'required|regex:/^\d{2}\/\d{2}\/\d{4}$/',
        ]);

        $user = User::findOrFail($student->user_id);

        $user->name = request('name');
        $user->email = request('email');

        if ($user->save()) {
            $student->weight = request('weight');
            $student->height = request('height');

            $birthdayArray = explode('/', request('birthday_at'));
            $student->birthday_at = $birthdayArray[2] . '-' . $birthdayArray[1] . '-' . $birthdayArray[0];

            $user->student()->save($student);
        }

        return redirect('/students/' . $student->id);
    }
}
