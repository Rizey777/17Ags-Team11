<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Lomba 17an') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen">
        @include('layouts.navigation')

        <!-- Main Content -->
        <main class="p-4">
            {{ $slot }} <!-- Ini akan menampilkan konten yang dikirim ke slot -->
        </main>
    </div>
</body>
</html>
