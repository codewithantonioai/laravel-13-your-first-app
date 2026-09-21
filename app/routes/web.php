<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello from Laravel';
});

Route::get('/hello/{name}', function (string $name) {
    return "Hello, {$name}";
});

Route::get('/notes', [NoteController::class, 'index']);
