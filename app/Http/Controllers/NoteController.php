<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function showCreateNotePage()
    {

        $notesQuantity = User::find(session('user.user_id'))->notes->count();

        return view('App.create-note', ['notesQuantity' => $notesQuantity]);
    }

    public function createNote(Request $request)
    {
        echo 'We are here!';
    }
}
