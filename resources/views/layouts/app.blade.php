<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mon site Laravel')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /*! TailwindCSS CDN */
            @import url('https://cdn.jsdelivr.net/npm/tailwindcss@3.3.5/dist/tailwind.min.css');
        </style>
    @endif
</head>
<body class="bg-gray-100 text-gray-900">

<!-- Barre de navigation -->
<nav class="bg-white shadow-md p-4">
    <div class="container mx-auto flex justify-between">
        <a href="{{ url('/') }}" class="text-xl font-semibold">Home</a>
        <div>
            <a href="{{ url('/books') }}" class="px-4 py-2 text-gray-700 hover:text-gray-900">Liste livres</a>
        </div>
    </div>
</nav>

<!-- Contenu de la page -->
<main class="container mx-auto p-6">
    @yield('content')
</main>

<!-- Pied de page -->
<footer class="bg-white shadow-md p-4 mt-10 text-center">
    <p>&copy; {{ date('Y') }} Virgile Marty was there</p>
</footer>

</body>
</html>
