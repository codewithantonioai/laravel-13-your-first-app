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
