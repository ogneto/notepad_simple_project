<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Note;
use App\Service\DecryptService;

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

    public function showEditNotePage($id)
    {
        $id = DecryptService::decrypt($id);

        if (!$id) {
            return redirect()->route('indexApp')->with('error', 'Something went wrong. Please try again.');
        }

        $note = Note::find($id);

        if (!$note) {
            return redirect()->route('indexApp')->with('error', 'Something went wrong. Please try again.');
        }

        return view('app.edit-note', ['note' => $note]);
    }

    public function updateNote(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'min:5|max:50',
                'content' => 'min:10'
            ],
            [
                'title.min' => 'The title must be at least :min characters long. please try again.',
                'title.max' => 'The title must be at most :max characters long. please try again.',
                'content.min' => 'The content must be at least :min characters long. please try again.'
            ]
        );

        $note = Note::find($id);

        if (!$note) {
            return redirect()->route('indexApp')->with('error', 'Something went wrong. Please try again.');
        }

        $note->title = $request->title;
        $note->note = $request->content;
        $note->save();

        return redirect()->route('indexApp')->with('success', 'Note updated successfully!');
    }
}
