<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function showCreateNotePage()
    {

        $notesQuantity = User::find(session('user.user_id'))->notes->count();

        return view('app.create-note', ['notesQuantity' => $notesQuantity]);
    }

    public function createNote(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|min:5|max:50',
                'content' => 'required|min:10'
            ],
            [
                'title.required' => 'The title is required. please try again.',
                'content.required' => 'The content is required. please try again.',
                'title.min' => 'The title must be at least :min characters long. please try again.',
                'title.max' => 'The title must be at most :max characters long. please try again.',
                'content.min' => 'The content must be at least :min characters long. please try again.'
            ]
        );

        $note = new Note();
        $note->user_id = session('user.user_id');
        $note->title = $request->title;
        $note->note = $request->content;
        $note->save();

        return redirect()->route('indexApp')->with('success', 'Note created successfully!');
    }
}
