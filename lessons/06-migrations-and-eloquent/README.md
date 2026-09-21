# Lesson 6 · Migrations and Eloquent

▶ [Watch this lesson](https://youtu.be/Kzgubnx29fU?t=931) (starts at 15:31)

## Goal

Lesson six: database. We create the notes table with a migration and read it with Eloquent.

## Commands and files (as shown in the video)

### Terminal · make model

```bash
php artisan make:model Note -m
```

### `database/migrations/2026_09_21_134032_create_notes_table.php` · migracion

```php
public function up(): void
{
    Schema::create('notes', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content')->nullable();
        $table->timestamps();
    });
}
```

### Terminal · migrate

```bash
php artisan migrate
```

### `app/Models/Note.php` · modelo

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'content'])]
class Note extends Model
{
    //
}
```

### Terminal · tinker

```bash
php artisan tinker
App\Models\Note::create(['title' => 'Buy bread']);
App\Models\Note::count();
```

### `app/Http/Controllers/NoteController.php` · leer con eloquent

```php
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
```

## Recap

Migration, model, data and view. The application works end to end. We close with a recap and the next steps.
