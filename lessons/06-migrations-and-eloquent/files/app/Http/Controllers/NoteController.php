<?php

namespace App\Http\Controllers;

use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::latest()->get();

        return view('notes.index', ['notes' => $notes]);
    }
}
