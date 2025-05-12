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

        /* Active menu item rectangle */
        .menu-item.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 5px;
            background-color: #2E7D32;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased text-gray-900">
    <!-- Sidebar Overlay (Mobile only) -->
    <div id="sidebar-overlay" class="sidebar-overlay"></div>
    
    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 bg-white shadow-md">
        <div class="p-6">
            <h1 class="text-2xl font-bold text-[#2E7D32]">LOGO</h1>
        </div>
        <nav class="mt-6">
            <a href="/dashboard" class="menu-item relative flex items-center px-6 py-3 text-[#2E7D32] hover:bg-[#D0D9CD] {{ request()->is('dashboard') ? 'bg-[#D0D9CD] active font-semibold' : '' }}">
                <i data-lucide="home" class="w-5 h-5 mr-3"></i>
                <span>Home</span>
            </a>
            <a href="/pembelian" class="menu-item relative flex items-center px-6 py-3 text-[#2E7D32] hover:bg-[#D0D9CD] {{ request()->is('pembelian') ? 'bg-[#D0D9CD] active font-semibold' : '' }}">
                <i data-lucide="wallet-cards" class="w-5 h-5 mr-3"></i>
                <span>Pembelian</span>
            </a>
            <a href="/transaksi" class="menu-item relative flex items-center px-6 py-3 text-[#2E7D32] hover:bg-[#D0D9CD] {{ request()->is('transaksi') ? 'bg-[#D0D9CD] active font-semibold' : '' }}">
                <i data-lucide="shopping-bag" class="w-5 h-5 mr-3"></i>
                <span>Transaksi</span>
            </a>
            <a href="/report" class="menu-item relative flex items-center px-6 py-3 text-[#2E7D32] hover:bg-[#D0D9CD] {{ request()->is('report') ? 'bg-[#D0D9CD] active font-semibold' : '' }}">
                <i data-lucide="bar-chart" class="w-5 h-5 mr-3"></i>
                <span>Report</span>
            </a>
            <a href="/setting" class="menu-item relative flex items-center px-6 py-3 text-[#2E7D32] hover:bg-[#D0D9CD] {{ request()->is('setting') ? 'bg-[#D0D9CD] active font-semibold' : '' }}">
                <i data-lucide="settings" class="w-5 h-5 mr-3"></i>
                <span>Setting</span>
            </a>
        </nav>
        
        <!-- Mobile close button -->
        <button id="close-sidebar" class="md:hidden absolute top-4 right-4 text-[#2E7D32] hover:text-gray-700">
            <i data-lucide="x" class="w-5 h-5"></i>
        </button>
    </aside>

    <!-- Main Content -->
    <div id="content-wrapper" class="min-h-screen">
        <!-- Topbar -->
        <header class="bg-white shadow-sm px-4 sm:px-6 py-3 flex items-center justify-between sticky top-0 z-40">
            <div class="flex items-center">
                <button id="sidebar-toggle" class="mr-2 sm:mr-4 text-gray-600 hover:text-gray-900 focus:outline-none">
                    <i data-lucide="menu" class="w-5 sm:w-6 h-5 sm:h-6"></i>
                </button>
                <h1 class="text-base sm:text-lg font-semibold">
            {{ ucfirst(str_replace('-', ' ', (Route::currentRouteName() ?? 'home'))) }}
        </h1>
            </div>
            <div class="relative">
                <button id="user-dropdown" class="bg-[#2E7D32] text-white px-4 py-2 rounded-full flex items-center focus:outline-none hover:bg-[#256528] transition duration-200">
                    <i data-lucide="user" class="w-4 sm:w-5 h-4 sm:h-5 mr-1 sm:mr-2"></i>
                    <span class="text-sm sm:text-base">User Admin</span>
                </button>
                <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg z-50">
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-red-500 text-sm hover:bg-red-100 hover:text-red-600 rounded-lg transition duration-200">Logout</button>
                    </form>
                </div>
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
            
            // Debug helper
            console.log('Sidebar script loaded');
            sidebarToggle.addEventListener('click', function() {
                console.log('Sidebar toggle clicked');
                console.log('Is mobile view:', isMobileView());
                console.log('Sidebar classes:', sidebar.className);
            });

            // Dropdown toggle functionality
            const userButton = document.getElementById('user-dropdown');
            const dropdown = document.getElementById('dropdown-menu');

            userButton.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!userButton.contains(e.target) && !dropdown.contains(e.target)) {
                    dropdown.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>