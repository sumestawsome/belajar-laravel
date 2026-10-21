<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Laravel')</title>
    <!-- Tailwind CSS via CDN (cocok & praktis untuk prototipe awal) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-800 flex flex-col min-h-screen">

    <!-- Navigasi Bar -->
    <header class="bg-indigo-600 text-white shadow">
        <div class="max-w-5xl mx-auto px-4 py-4 flex justify-between items-center">
            <span class="font-bold text-xl tracking-wide">Praktikum Web</span>
            <nav class="flex gap-6 text-sm font-medium">
                <a href="{{ route('home') }}" class="hover:text-indigo-200 transition">Beranda</a>
                <a href="{{ route('about') }}" class="hover:text-indigo-200 transition">Tentang</a>
                <a href="{{ route('contact') }}" class="hover:text-indigo-200 transition">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Konten Dinamis -->
    <main class="max-w-5xl mx-auto p-6 flex-1 w-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 py-4 text-center text-sm text-slate-500">
        &copy; {{ date('Y') }} Modul Frontend Laravel.
    </footer>

</body>
</html>