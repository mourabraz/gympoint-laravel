<?php

namespace App\Http\Controllers\Api;

use App\Models\Student;
use App\User;

use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function destroy(Student $student)
    {
        try {
            $user = User::findOrFail($student->user_id);

            if (!isset($user)) {
                return response()->json(['error' => 'User not found'], 404);
            }

            $user->delete();
        } catch (\Exception $exception) {
            dd($exception);
            return response()->json(['error' => 'Internal Server Error'], 500);
        }

        return response()->json(null, 204);
    }
}
