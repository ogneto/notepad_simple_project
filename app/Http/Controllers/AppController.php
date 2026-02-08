<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {

        $notes = User::find(session('user.user_id'))->notes;

        return view('app.index', ['notes' => $notes]);
    }
}
