<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WonderJob</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-black text-white mx-10 relative h-screen">
    <nav class="flex justify-between items-center py-4 border-b-2 border-b-white/15 mb-6 bg-black/90">
        <div class="">
            <a href="#" class="font-bold text-xl">WonderJob</a>
        </div>
        <div class="flex gap-x-6">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </div>
        <div class="flex gap-x-6 items-center">
            <a href="#" class="bg-blue-900 rounded-xl py-2 px-4 transition duration-300 hover:bg-blue-600">Sign In</a>
            <span class="w-8 h-8 block bg-white rounded-full"></span>
        </div>
    </nav>
    <main class="mx-20 space-y-6">
        {{ $slot }}
    </main>
    <footer class="mt-3 px-6 py-2 h-16 bg-black flex justify-center">
        <p class="text-lg h-fit border-b-2 border-b-white/50">&copy; Copyright 2024</p>
    </footer>
</body>
</html>
{{-- https://id.indeed.com/companies?from=gnav-title-webapp --}}