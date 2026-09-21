<?php

namespace App\Http\Controllers;

class NoteController extends Controller
{
    public function index()
    {
        $notes = ['Buy bread', 'Learn Laravel', 'Record the tutorial'];

        return view('notes.index', ['notes' => $notes]);
    }
}
