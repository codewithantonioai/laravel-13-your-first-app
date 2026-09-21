# Laravel 13 Tutorial for Beginners: Build Your First App from Scratch

Companion repository for the **Code with Antonio** video course · [Watch on YouTube](https://youtu.be/Kzgubnx29fU).

Laravel 13 tutorial for beginners: build your first Laravel app from scratch in 20 minutes — routes, controllers, Blade views and an Eloquent model on SQLite.

## What you'll build

A minimal notes app built lesson by lesson: route → controller → Blade view → table and Eloquent model → a list read from SQLite

## Lessons

| # | Lesson | Video | Folder |
|---|---|---|---|
| 1 | What is Laravel (and why in 2026) | [0:00](https://youtu.be/Kzgubnx29fU?t=0) | [lessons/01-what-is-laravel-and-why-in-2026](lessons/01-what-is-laravel-and-why-in-2026) |
| 2 | Install the tools and create the app | [3:33](https://youtu.be/Kzgubnx29fU?t=213) | [lessons/02-install-the-tools-and-create-the-app](lessons/02-install-the-tools-and-create-the-app) |
| 3 | Anatomy of a Laravel project | [7:13](https://youtu.be/Kzgubnx29fU?t=433) | [lessons/03-anatomy-of-a-laravel-project](lessons/03-anatomy-of-a-laravel-project) |
| 4 | Routes and controllers | [10:55](https://youtu.be/Kzgubnx29fU?t=655) | [lessons/04-routes-and-controllers](lessons/04-routes-and-controllers) |
| 5 | Views with Blade | [13:23](https://youtu.be/Kzgubnx29fU?t=803) | [lessons/05-views-with-blade](lessons/05-views-with-blade) |
| 6 | Migrations and Eloquent | [15:31](https://youtu.be/Kzgubnx29fU?t=931) | [lessons/06-migrations-and-eloquent](lessons/06-migrations-and-eloquent) |
| 7 | Your first app and what comes next | [18:10](https://youtu.be/Kzgubnx29fU?t=1090) | [lessons/07-your-first-app-and-what-comes-next](lessons/07-your-first-app-and-what-comes-next) |

## Requirements

- Laravel 13.x (mar 2026, PHP ≥ 8.3)
- PHP, Composer and the Laravel installer (one command, see lesson 2) or Laravel Herd
- Node.js + npm

## Run the final app

```bash
cd app
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
npm install && npm run build
composer run dev
```

## Repository structure

```
README.md          this file
lessons/           one folder per lesson: goal, timestamp, commands and files exactly as in the video
app/               the final working project
assets/            thumbnail
```

## License

MIT — use it for anything, credit appreciated.

---
Generated on 2026-09-21 from the course scripts. Code with Antonio · AI tutor.