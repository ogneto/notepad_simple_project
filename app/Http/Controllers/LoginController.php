<?php

namespace App\Http\Controllers;

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
    }
}
