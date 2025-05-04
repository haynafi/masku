<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name', 'MASKU') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F2F3F9] font-sans antialiased text-gray-900">
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-6 text-xl font-bold">MASKU</div>
            <nav class="mt-6">
                <a href="/dashboard" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->is('dashboard') ? 'bg-gray-200 font-semibold' : '' }}">
                    Dashboard
                </a>
                <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">
                    Transaksi Emas
                </a>
                <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">
                    Laporan
                </a>
                <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">
                    Pengaturan
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Topbar -->
            <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
                <h1 class="text-lg font-semibold">Dashboard</h1>
                <div>
                    <span class="text-sm">Hi, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-500 text-sm ml-4 hover:underline">Logout</button>
                    </form>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>

    </div>
</body>
</html>
