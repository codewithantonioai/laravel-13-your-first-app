# Lesson 3 · Anatomy of a Laravel project

▶ [Watch this lesson](https://youtu.be/Kzgubnx29fU?t=433) (starts at 7:13)

## Goal

Lesson three: we open the project folder and see what's inside, what each thing is for, and where each request comes in.

## Commands and files (as shown in the video)

### Terminal · ls real

```bash
ls
ls app routes resources
```

### `public/index.php` · index php

```php
<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
```

### `.env.example` · env

```ini
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:••••••••••••••••••••••••••••
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite
SESSION_DRIVER=database
QUEUE_CONNECTION=database
```

## Recap

Now you can find your way around the project and you know where each request goes. In the next lesson we start writing code: we define the first routes and create the notes controller.
