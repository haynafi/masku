@extends('layouts.base')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Welcome Card -->
        <div class="bg-white p-6 rounded-xl shadow-sm">
            <h2 class="text-xl font-semibold mb-4">Selamat datang di MASKU</h2>
            <p class="text-gray-600 mb-6">Ini adalah halaman utama untuk mencatat transaksi emas.</p>
        </div>
        
        <!-- Laba/Rugi Card (matching the donut chart in mockup) -->
        <div class="bg-white p-6 rounded-xl shadow-sm">
            <h3 class="text-lg font-medium mb-4">Laba/Rugi</h3>
            
            <div class="flex flex-col md:flex-row justify-between">
                <!-- Donut Chart -->
                <div class="w-full md:w-1/3 flex justify-center">
                    <svg class="w-40 h-40" viewBox="0 0 100 100">
                        <!-- Donut segments matching mockup colors -->
                        <circle cx="50" cy="50" r="40" fill="transparent" stroke="#4ECCA3" stroke-width="20" stroke-dasharray="75 100" stroke-dashoffset="0" />
                        <circle cx="50" cy="50" r="40" fill="transparent" stroke="#5B8FF9" stroke-width="20" stroke-dasharray="50 100" stroke-dashoffset="-75" />
                        <circle cx="50" cy="50" r="40" fill="transparent" stroke="#8B5CF6" stroke-width="20" stroke-dasharray="25 100" stroke-dashoffset="-125" />
                        <circle cx="50" cy="50" r="30" fill="white" />
                    </svg>
                </div>
                
                <!-- Legend and Values -->
                <div class="w-full md:w-2/3 mt-4 md:mt-0">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-3 h-3 rounded-full bg-[#5B8FF9] mr-2"></div>
                                <span class="text-sm">Brutto</span>
                                <span class="text-xs text-green-500 ml-2">↑ 40%</span>
                            </div>
                            <span class="font-medium">Rp1.500.000.000</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-3 h-3 rounded-full bg-[#4ECCA3] mr-2"></div>
                                <span class="text-sm">Untung Bersih</span>
                                <span class="text-xs text-green-500 ml-2">↑ 40%</span>
                            </div>
                            <span class="font-medium">Rp500.000.000</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-3 h-3 rounded-full bg-[#8B5CF6] mr-2"></div>
                                <span class="text-sm">Pengeluaran</span>
                                <span class="text-xs text-green-500 ml-2">↑ 40%</span>
                            </div>
                            <span class="font-medium">Rp400.000.000</span>
                        </div>
                    </div>
                    
                    <!-- Total Laba Card -->
                    <div class="mt-6 bg-[#E6F7F1] p-3 rounded-lg flex justify-between items-center">
                        <span class="text-[#4ECCA3] font-medium">Laba</span>
                        <span class="text-[#4ECCA3] font-bold">Rp1.500.000.000</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Chart/Graph visualization (full width) -->
        <div class="bg-white p-6 rounded-xl shadow-sm col-span-1 lg:col-span-2">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium">Grafik Pembelian vs Penjualan</h3>
            </div>
            
            <div class="h-80 w-full overflow-x-auto">
                <!-- SVG Chart similar to the mockup -->
                <svg class="w-full h-full min-w-[600px]" viewBox="0 0 800 300">
                    <!-- Pink gradient background matching mockup -->
                    <defs>
                        <linearGradient id="pinkGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" style="stop-color:#FFCDD2;stop-opacity:0.8" />
                            <stop offset="100%" style="stop-color:#FFF5F5;stop-opacity:0.2" />
                        </linearGradient>
                    </defs>
                    
                    <!-- Area chart background -->
                    <path d="M0,250 C100,200 200,230 300,210 C400,190 500,150 600,200 C700,250 800,180 800,180 L800,300 L0,300 Z" 
                          fill="url(#pinkGradient)" />
                    
                    <!-- Grid lines -->
                    <line x1="0" y1="250" x2="800" y2="250" stroke="#E5E7EB" stroke-width="1" stroke-dasharray="5,5" />
                    <line x1="0" y1="200" x2="800" y2="200" stroke="#E5E7EB" stroke-width="1" stroke-dasharray="5,5" />
                    <line x1="0" y1="150" x2="800" y2="150" stroke="#E5E7EB" stroke-width="1" stroke-dasharray="5,5" />
                    <line x1="0" y1="100" x2="800" y2="100" stroke="#E5E7EB" stroke-width="1" stroke-dasharray="5,5" />
                    <line x1="0" y1="50" x2="800" y2="50" stroke="#E5E7EB" stroke-width="1" stroke-dasharray="5,5" />
                    
                    <!-- Bar charts with mockup colors -->
                    <!-- Mar 27 -->
                    <rect x="50" y="180" width="30" height="120" fill="#5B8FF9" rx="2" />
                    <rect x="85" y="150" width="30" height="150" fill="#4ECCA3" rx="2" />
                    
                    <!-- Mar 28 -->
                    <rect x="180" y="200" width="30" height="100" fill="#5B8FF9" rx="2" />
                    <rect x="215" y="200" width="30" height="100" fill="#4ECCA3" rx="2" />
                    
                    <!-- Mar 29 -->
                    <rect x="310" y="170" width="30" height="130" fill="#5B8FF9" rx="2" />
                    <rect x="345" y="180" width="30" height="120" fill="#4ECCA3" rx="2" />
                    
                    <!-- Mar 30 -->
                    <rect x="440" y="150" width="30" height="150" fill="#5B8FF9" rx="2" />
                    <rect x="475" y="140" width="30" height="160" fill="#4ECCA3" rx="2" />
                    
                    <!-- Mar 31 -->
                    <rect x="570" y="220" width="30" height="80" fill="#5B8FF9" rx="2" />
                    <rect x="605" y="180" width="30" height="120" fill="#4ECCA3" rx="2" />
                    
                    <!-- Apr 1 -->
                    <rect x="700" y="170" width="30" height="130" fill="#5B8FF9" rx="2" />
                    <rect x="735" y="160" width="30" height="140" fill="#4ECCA3" rx="2" />
                    
                    <!-- X-axis labels -->
                    <text x="65" y="290" text-anchor="middle" font-size="12" fill="#6B7280">Mar 27</text>
                    <text x="195" y="290" text-anchor="middle" font-size="12" fill="#6B7280">Mar 28</text>
                    <text x="325" y="290" text-anchor="middle" font-size="12" fill="#6B7280">Mar 29</text>
                    <text x="455" y="290" text-anchor="middle" font-size="12" fill="#6B7280">Mar 30</text>
                    <text x="585" y="290" text-anchor="middle" font-size="12" fill="#6B7280">Mar 31</text>
                    <text x="715" y="290" text-anchor="middle" font-size="12" fill="#6B7280">Apr 1</text>
                    
                    <!-- Y-axis labels -->
                    <text x="20" y="270" text-anchor="end" font-size="12" fill="#6B7280">0</text>
                    <text x="20" y="220" text-anchor="end" font-size="12" fill="#6B7280">5k</text>
                    <text x="20" y="170" text-anchor="end" font-size="12" fill="#6B7280">15k</text>
                    <text x="20" y="120" text-anchor="end" font-size="12" fill="#6B7280">20k</text>
                    <text x="20" y="70" text-anchor="end" font-size="12" fill="#6B7280">25k</text>
                    
                    <!-- Right Y-axis labels -->
                    <text x="780" y="270" text-anchor="start" font-size="12" fill="#6B7280">0</text>
                    <text x="780" y="220" text-anchor="start" font-size="12" fill="#6B7280">5000</text>
                    <text x="780" y="170" text-anchor="start" font-size="12" fill="#6B7280">15000</text>
                    <text x="780" y="120" text-anchor="start" font-size="12" fill="#6B7280">20000</text>
                    <text x="780" y="70" text-anchor="start" font-size="12" fill="#6B7280">25000</text>
                </svg>
            </div>
        </div>
    </div>
@endsection
