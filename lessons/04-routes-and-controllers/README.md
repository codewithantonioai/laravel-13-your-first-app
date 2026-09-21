# Lesson 4 · Routes and controllers

▶ [Watch this lesson](https://youtu.be/Kzgubnx29fU?t=655) (starts at 10:55)

## Goal

Lesson four. We start writing code: we define the first routes and create the notes controller.

## Commands and files (as shown in the video)

### `routes/web.php` · primera ruta

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello from Laravel';
});
```

### `routes/web.php` · parametros

```php
<?php

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
```

### Terminal · make controller

```bash
php artisan make:controller NoteController
php artisan route:list
```

### `app/Http/Controllers/NoteController.php` · controlador

```php
<?php

namespace App\Http\Controllers;

class NoteController extends Controller
{
    public function index()
    {
        return 'The list of notes will go here';
    }
}
```

## Recap

You now have routes, a controller and the slash notes URL answering. In the next lesson we build the view with Blade so that page has real HTML.
