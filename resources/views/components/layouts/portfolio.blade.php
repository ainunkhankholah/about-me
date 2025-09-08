<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Portofolio - ' . config('app.name') }}</title>

    {{-- SEO Meta --}}
    <meta name="description" content="{{ $metaDescription ?? 'Portofolio pribadi berisi tentang saya, pengalaman, projek, dan koleksi foto.' }}">
    <meta name="keywords" content="portofolio, laravel, livewire, filament, programmer, developer">
    <meta name="author" content="Ainun Khan Kholah">

    {{-- Open Graph / Social Preview --}}
    <meta property="og:title" content="{{ $title ?? 'Portofolio' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Lihat portofolio saya di sini.' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/preview.jpg') }}">

    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-50 text-gray-900">

    {{-- Navbar --}}
    <header class="bg-white shadow fixed w-full z-50">
        <nav class="container mx-auto flex items-center justify-between px-4 py-3">
            <a href="#" class="text-xl font-bold">Ainun Khan Kholah</a>
            <button id="menu-btn" class="lg:hidden text-gray-800 focus:outline-none">
                ☰
            </button>
            <ul id="menu" class="hidden lg:flex space-x-6">
                <li><a href="#about" class="hover:text-blue-600">About Me</a></li>
                <li><a href="#projects" class="hover:text-blue-600">Projects</a></li>
                <li><a href="#photos" class="hover:text-blue-600">Photos</a></li>
                <li><a href="#education" class="hover:text-blue-600">Education</a></li>
                <li><a href="#skills" class="hover:text-blue-600">Skills</a></li>
            </ul>
        </nav>
        {{-- Mobile menu --}}
        <div id="mobile-menu" class="hidden bg-white lg:hidden shadow">
            <ul class="flex flex-col space-y-2 p-4">
                <li><a href="#about" class="hover:text-blue-600">About Me</a></li>
                <li><a href="#projects" class="hover:text-blue-600">Projects</a></li>
                <li><a href="#photos" class="hover:text-blue-600">Photos</a></li>
                <li><a href="#education" class="hover:text-blue-600">Education</a></li>
                <li><a href="#skills" class="hover:text-blue-600">Skills</a></li>
            </ul>
        </div>
    </header>

    <main class="pt-20">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-gray-300 mt-16">
        <div class="container mx-auto px-4 py-6 text-center">
            <p>&copy; {{ date('Y') }} Ainun Khan Kholah. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById("menu-btn").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });
    </script>

    @livewireScripts
</body>
</html>

