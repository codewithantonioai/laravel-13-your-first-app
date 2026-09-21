# Lesson 5 · Views with Blade

▶ [Watch this lesson](https://youtu.be/Kzgubnx29fU?t=803) (starts at 13:23)

## Goal

Lesson five: views. Blade is Laravel's template engine, and with it we're going to give the notes page some HTML.

## Commands and files (as shown in the video)

### `resources/views/components/layout.blade.php` · layout

```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-slate-950 text-slate-100">
    <main class="mx-auto max-w-2xl p-12">
        {{ $slot }}
    </main>
</body>
</html>
```

### `resources/views/notes/index.blade.php` · vista notas

```blade
<x-layout>
    <h1 class="text-4xl font-bold">My notes</h1>

    <ul class="mt-8 space-y-3">
        @foreach ($notes as $note)
            <li class="rounded-xl bg-slate-800 p-5 text-xl">
                {{ $note }}
            </li>
        @endforeach
    </ul>
</x-layout>
```

### `app/Http/Controllers/NoteController.php` · pasar datos

```php
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
```

## Recap

You have a layout, a view and the controller passing it data. Only the last piece is left: storing the notes in the database and reading them with Eloquent.
