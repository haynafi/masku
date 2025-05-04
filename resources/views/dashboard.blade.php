@extends('layouts.base')

@section('content')
    <div class="bg-white p-6 rounded-xl shadow-sm">
        <h2 class="text-xl font-semibold mb-4">Selamat datang di MASKU</h2>
        <p class="text-gray-600 mb-6">Ini adalah halaman utama untuk mencatat transaksi emas.</p>
        
        <!-- Chart/Graph visualization -->
        <div class="mt-8">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium">Transaksi Bulanan</h3>
                <div class="text-sm text-gray-500">2023</div>
            </div>
            
            <div class="h-64 w-full overflow-x-auto">
                <!-- SVG Chart similar to the mockup -->
                <svg class="w-full h-full min-w-[600px]" viewBox="0 0 800 300">
                    <!-- Pink gradient background -->
                    <defs>
                        <linearGradient id="pinkGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" style="stop-color:#FFD6CC;stop-opacity:0.8" />
                            <stop offset="100%" style="stop-color:#FFF5EE;stop-opacity:0.2" />
                        </linearGradient>
                    </defs>
                    
                    <!-- Area chart background -->
                    <path d="M0,250 C100,200 200,230 300,210 C400,190 500,150 600,200 C700,250 800,180 800,180 L800,300 L0,300 Z" 
                          fill="url(#pinkGradient)" />
                    
                    <!-- Bar charts -->
                    <!-- Mar 1 -->
                    <rect x="50" y="180" width="30" height="120" fill="#6366F1" rx="2" />
                    <rect x="85" y="150" width="30" height="150" fill="#4ADE80" rx="2" />
                    
                    <!-- Mar 15 -->
                    <rect x="180" y="200" width="30" height="100" fill="#6366F1" rx="2" />
                    <rect x="215" y="200" width="30" height="100" fill="#4ADE80" rx="2" />
                    
                    <!-- Mar 30 -->
                    <rect x="310" y="170" width="30" height="130" fill="#6366F1" rx="2" />
                    <rect x="345" y="180" width="30" height="120" fill="#4ADE80" rx="2" />
                    
                    <!-- Apr 15 -->
                    <rect x="440" y="150" width="30" height="150" fill="#6366F1" rx="2" />
                    <rect x="475" y="140" width="30" height="160" fill="#4ADE80" rx="2" />
                    
                    <!-- Apr 30 -->
                    <rect x="570" y="220" width="30" height="80" fill="#6366F1" rx="2" />
                    <rect x="605" y="180" width="30" height="120" fill="#4ADE80" rx="2" />
                    
                    <!-- May 1 -->
                    <rect x="700" y="170" width="30" height="130" fill="#6366F1" rx="2" />
                    <rect x="735" y="160" width="30" height="140" fill="#4ADE80" rx="2" />
                    
                    <!-- X-axis labels -->
                    <text x="65" y="290" text-anchor="middle" font-size="12" fill="#6B7280">Mar 1</text>
                    <text x="195" y="290" text-anchor="middle" font-size="12" fill="#6B7280">Mar 15</text>
                    <text x="325" y="290" text-anchor="middle" font-size="12" fill="#6B7280">Mar 30</text>
                    <text x="455" y="290" text-anchor="middle" font-size="12" fill="#6B7280">Apr 15</text>
                    <text x="585" y="290" text-anchor="middle" font-size="12" fill="#6B7280">Apr 30</text>
                    <text x="715" y="290" text-anchor="middle" font-size="12" fill="#6B7280">May 1</text>
                    
                    <!-- Y-axis labels -->
                    <text x="20" y="270" text-anchor="end" font-size="12" fill="#6B7280">0</text>
                    <text x="20" y="220" text-anchor="end" font-size="12" fill="#6B7280">10k</text>
                    <text x="20" y="170" text-anchor="end" font-size="12" fill="#6B7280">20k</text>
                    <text x="20" y="120" text-anchor="end" font-size="12" fill="#6B7280">30k</text>
                    <text x="20" y="70" text-anchor="end" font-size="12" fill="#6B7280">40k</text>
                </svg>
            </div>
        </div>
    </div>
@endsection