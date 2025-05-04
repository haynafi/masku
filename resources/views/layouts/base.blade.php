<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name', 'MASKU') }}</title>

    <!-- Add Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* Custom styles for sidebar behavior */
        body {
            overflow-x: hidden;
        }
        
        #sidebar {
            position: fixed;
            height: 100vh;
            z-index: 50;
            transition: transform 0.3s ease;
        }
        
        #content-wrapper {
            transition: margin-left 0.3s ease;
        }
        
        /* Mobile styles */
        @media (max-width: 767px) {
            #sidebar {
                transform: translateX(-100%);
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                width: 16rem; /* w-64 = 16rem */
            }
            
            #sidebar.active {
                transform: translateX(0);
            }
            
            #content-wrapper {
                margin-left: 0 !important;
            }
            
            /* Add overlay when sidebar is active on mobile */
            .sidebar-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 40;
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.3s ease, visibility 0.3s ease;
            }
            
            .sidebar-overlay.active {
                opacity: 1;
                visibility: visible;
            }
        }
        
        /* Desktop styles */
        @media (min-width: 768px) {
            #sidebar {
                transform: translateX(0);
            }
            
            #sidebar.hide {
                transform: translateX(-100%);
            }
            
            #content-wrapper {
                margin-left: 16rem; /* w-64 = 16rem */
            }
            
            #content-wrapper.expanded {
                margin-left: 0;
            }
        }
    </style>
</head>
<body class="bg-[#FFF5EE] font-sans antialiased text-gray-900">
    <!-- Sidebar Overlay (Mobile only) -->
    <div id="sidebar-overlay" class="sidebar-overlay"></div>
    
    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 bg-[#FFF0E6] shadow-md">
        <div class="p-6">
            <h1 class="text-2xl font-bold text-[#B07C43]">MASKU</h1>
        </div>
        <nav class="mt-6">
            <a href="/dashboard" class="flex items-center px-6 py-3 text-gray-700 hover:bg-[#FFE4D6] {{ request()->is('dashboard') ? 'bg-[#FFE4D6] font-semibold' : '' }}">
                <i data-lucide="home" class="w-5 h-5 mr-3"></i>
                <span>Dashboard</span>
            </a>
            <a href="/pembayaran" class="flex items-center px-6 py-3 text-gray-700 hover:bg-[#FFE4D6]"  {{ request()->is('pembayaran') ? 'bg-[#FFE4D6] font-semibold' : '' }}>
                <i data-lucide="wallet-cards" class="w-5 h-5 mr-3"></i>
                <span>Pembayaran</span>
            </a>
            <a href="#" class="flex items-center px-6 py-3 text-gray-700 hover:bg-[#FFE4D6]">
                <i data-lucide="shopping-bag" class="w-5 h-5 mr-3"></i>
                <span>Transaksi</span>
            </a>
            <a href="#" class="flex items-center px-6 py-3 text-gray-700 hover:bg-[#FFE4D6]">
                <i data-lucide="bar-chart" class="w-5 h-5 mr-3"></i>
                <span>Report</span>
            </a>
            <a href="#" class="flex items-center px-6 py-3 text-gray-700 hover:bg-[#FFE4D6]">
                <i data-lucide="settings" class="w-5 h-5 mr-3"></i>
                <span>Setting</span>
            </a>
        </nav>
        
        <!-- Mobile close button -->
        <button id="close-sidebar" class="md:hidden absolute top-4 right-4 text-gray-500 hover:text-gray-700">
            <i data-lucide="x" class="w-5 h-5"></i>
        </button>
        
        <!-- Footer -->
        <div class="border-t border-[#E6D0C0] p-4 text-center text-sm text-gray-500 absolute bottom-0 w-full">
            <p>footer</p>
        </div>
    </aside>

    <!-- Main Content -->
    <div id="content-wrapper" class="min-h-screen">
        <!-- Topbar -->
        <header class="bg-white shadow-sm px-6 py-4 flex items-center justify-between sticky top-0 z-40">
            <div class="flex items-center">
                <button id="sidebar-toggle" class="mr-4 text-gray-600 hover:text-gray-900 focus:outline-none">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
                <h1 class="text-lg font-semibold">{{ request()->is('dashboard') ? 'Dashboard' : 'MASKU' }}</h1>
            </div>
            <div class="flex items-center">
                <span class="text-sm mr-4">Hi, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-red-500 text-sm hover:underline">Logout</button>
                </form>
            </div>
        </header>

        <!-- Page Content -->
        <main class="p-6">
            @yield('content')
        </main>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Sidebar toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const contentWrapper = document.getElementById('content-wrapper');
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebarOverlay = document.getElementById('sidebar-overlay');
            const closeSidebar = document.getElementById('close-sidebar');
            
            // Function to check if we're on mobile
            function isMobileView() {
                return window.innerWidth < 768;
            }
            
            // Function to toggle sidebar on mobile
            function toggleMobileSidebar() {
                sidebar.classList.toggle('active');
                sidebarOverlay.classList.toggle('active');
                document.body.classList.toggle('overflow-hidden');
            }
            
            // Function to toggle sidebar on desktop
            function toggleDesktopSidebar() {
                sidebar.classList.toggle('hide');
                contentWrapper.classList.toggle('expanded');
            }
            
            // Toggle sidebar based on device
            sidebarToggle.addEventListener('click', function() {
                if (isMobileView()) {
                    toggleMobileSidebar();
                } else {
                    toggleDesktopSidebar();
                }
            });
            
            // Close sidebar on mobile
            closeSidebar.addEventListener('click', function() {
                if (isMobileView()) {
                    toggleMobileSidebar();
                }
            });
            
            // Close sidebar when clicking overlay
            sidebarOverlay.addEventListener('click', function() {
                if (isMobileView() && sidebar.classList.contains('active')) {
                    toggleMobileSidebar();
                }
            });
            
            // Handle window resize
            window.addEventListener('resize', function() {
                if (!isMobileView()) {
                    // We're on desktop now
                    sidebar.classList.remove('active');
                    sidebarOverlay.classList.remove('active');
                    document.body.classList.remove('overflow-hidden');
                } else {
                    // We're on mobile now
                    sidebar.classList.remove('hide');
                    contentWrapper.classList.remove('expanded');
                }
            });
            
            // Debug helper - add this to help troubleshoot
            console.log('Sidebar script loaded');
            sidebarToggle.addEventListener('click', function() {
                console.log('Sidebar toggle clicked');
                console.log('Is mobile view:', isMobileView());
                console.log('Sidebar classes:', sidebar.className);
            });
        });
    </script>
</body>
</html>