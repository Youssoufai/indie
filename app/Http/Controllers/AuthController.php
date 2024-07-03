<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        // Validate
        $fields =  $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed']
        ]);
        // Register
        $user = User::create($fields);
        Auth::login($user);
        // Redirect
        return redirect()->intended('/dashboard');
    }
    public function login(Request $request)
    {
        // validate 

        $fields =  $request->validate([
            'email' => ['required', 'max:255', 'email',],
            'password' => ['required']
        ]);

        //login
        if (Auth::attempt($fields, $request->remeber)) {
            return redirect()->route('/');
        } else {
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records'
            ]);
        };

        // redirect 
    }
    // Logout User

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
