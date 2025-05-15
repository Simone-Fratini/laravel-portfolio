<!DOCTYPE html>
<html lang="En">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen flex flex-col">
    <header class="w-full max-w-4xl mx-auto py-6 px-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold">My Portfolio</h1>
        @if (Route::has('login'))
            <nav class="flex items-center gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700 transition">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-2 rounded border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-4 py-2 rounded border border-gray-400 text-gray-700 hover:bg-gray-200 transition">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <main class="flex-1 w-full max-w-4xl mx-auto px-4 py-8">
        <section class="mb-12">
            <h2 class="text-xl font-semibold mb-2">About Me</h2>
            <p class="text-gray-700">I'm a web developer passionate about building beautiful and functional web applications. Welcome to my portfolio!</p>
        </section>
        <section class="mb-12">
            <h2 class="text-xl font-semibold mb-2">Projects</h2>
            <ul class="space-y-4">
                <li class="p-4 bg-white rounded shadow">
                    <h3 class="font-bold">Project One</h3>
                    <p class="text-gray-600">A brief description of your project goes here.</p>
                </li>
                <li class="p-4 bg-white rounded shadow">
                    <h3 class="font-bold">Project Two</h3>
                    <p class="text-gray-600">A brief description of your project goes here.</p>
                </li>
            </ul>
        </section>
        <section>
            <h2 class="text-xl font-semibold mb-2">Contact</h2>
            <p class="text-gray-700">Feel free to reach out via email at <a href="mailto:your.email@example.com" class="text-blue-600 underline">your.email@example.com</a>.</p>
        </section>
    </main>
    <footer class="w-full max-w-4xl mx-auto py-4 px-4 text-center text-gray-500 text-sm">
        &copy; {{ date('Y') }} My Portfolio. All rights reserved.
    </footer>
</body>
</html>
