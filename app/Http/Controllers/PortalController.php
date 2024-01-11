<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortalController extends Controller
{
    public function dashboard () {
        return view('dashboard');
    }

    public function index () {
        $student = Auth::user();

        $name = $student->name;
        return view('dashboard', ['name' => $name]);
    }

    public function logout () {
        auth()->logout();
        return redirect('/');
    }
}
