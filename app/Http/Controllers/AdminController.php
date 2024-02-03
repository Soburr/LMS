<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    public function showAdminRegister()
    {
        return "REGISTERING";
    }

    public function adminRegister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }

    public function showAdminLogin()
    {
        return "LOGGING IN";
    }

    public function adminLogin(AdminRequest $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::where('id', $request->id)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::login($admin);
            return redirect('/admin-dashboard')->with('success', 'You Are Logged In');
        } else {
            return redirect()->back()->withErrors('Invalid Credentials, Try again');
        }
    }
}
