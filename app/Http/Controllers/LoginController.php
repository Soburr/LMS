<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function showLoginForm () {
        return view ('auth.login');
    }
    public function login (Request $request) {
        $request->validate([
             'student_id' => 'required',
             'password' => 'required',
        ]);

        $student = Student::where('student_id', $request->student_id)->first();

        if ($student && Hash::check($request->password, $student->password)) {
            Auth::login($student);
            return redirect('/dashboard')->with('success', 'You Are Logged In');
        } else {
            return redirect()->back()->withErrors('Invalid Credentials, Try again');
        }
    }

}
