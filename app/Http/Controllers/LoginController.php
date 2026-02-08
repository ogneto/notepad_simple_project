<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('show-login-form');
    }

    public function loginSubmit(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'required' => ':attribute is required. please try again.',
                'email.email' => 'The value entered is not a valid email. please try again.'
            ]
        );

        $user = User::where('username', $request->email)->first();

        if (! $user) {
            return redirect()->back()->withInput()->with('loginError', 'Invalid credentials. please try again.');
        }

        $passwordMatch = password_verify($request->password, $user->password);

        if (! $passwordMatch) {
            return redirect()->back()->withInput()->with('loginError', 'Invalid credentials. please try again.');
        }

        session([
            'user' => [
                'user_id' => $user->id,
                'username' => $user->username,
            ]
        ]);

        return redirect()->route('indexApp');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('about');
    }
}
