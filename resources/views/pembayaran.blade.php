@extends('layouts.base')

@section('content')
    <div class="bg-white p-6 rounded-xl shadow-sm">
        <h2 class="text-xl font-semibold mb-4 text-[#B07C43]">Upload Bukti Pembayaran</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Form Section -->
            <div class="bg-[#FFF5EE] p-5 rounded-lg shadow-sm">
                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4"></form>
                    @csrf
                    
                    <div class="mb-4">
                        <label for="invoice_number" class="block text-sm font-medium text-gray-700 mb-1">Nomor Invoice</label>
                        <input type="text" id="invoice_number" name="invoice_number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#B07C43]" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="distributor" class="block text-sm font-medium text-gray-700 mb-1">Distributor</label>
                        <input type="text" id="distributor" name="distributor" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#B07C43]" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                        <textarea id="description" name="description" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#B07C43]"></textarea>
                    </div>
                    
                    <div class="mb-4">
                        <label for="transaction_date" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Transaksi</label>
                        <input type="date" id="transaction_date" name="transaction_date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#B07C43]" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="evidence" class="block text-sm font-medium text-gray-700 mb-1">Bukti Pembayaran</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <div id="preview-container" class="hidden mb-3">
                                    <img id="preview-image" src="#" alt="Preview" class="mx-auto h-32 object-cover rounded-md">
                                </div>
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="evidence" class="relative cursor-pointer bg-white rounded-md font-medium text-[#B07C43] hover:text-[#8A5A2B] focus-within:outline-none">
                                        <span>Upload file</span>
                                        <input id="evidence" name="evidence" type="file" class="sr-only" accept="image/*" required>
                                    </label>
                                    <p class="pl-1">atau drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 bg-[#B07C43] text-white rounded-md hover:bg-[#8A5A2B] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#B07C43]">
                            Submit Pembayaran
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Table Section -->
            <div class="bg-[#FFF5EE] p-5 rounded-lg shadow-sm">
                <h3 class="text-lg font-medium mb-4 text-[#B07C43]">Riwayat Pembayaran Terbaru</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Invoice</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Distributor</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bukti</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Dummy data -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">INV-2023-001</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">PT Emas Murni</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-15</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <button class="text-[#B07C43] hover:text-[#8A5A2B]">
                                        <i data-lucide="eye" class="w-5 h-5"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">INV-2023-002</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Toko Emas Sejahtera</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-18</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <button class="text-[#B07C43] hover:text-[#8A5A2B]">
                                        <i data-lucide="eye" class="w-5 h-5"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">INV-2023-003</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Distributor Emas Prima</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-20</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <button class="text-[#B07C43] hover:text-[#8A5A2B]">
                                        <i data-lucide="eye" class="w-5 h-5"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Preview image before upload
        document.getElementById('evidence').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                const previewContainer = document.getElementById('preview-container');
                const previewImage = document.getElementById('preview-image');
                
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                }
                
                reader.readAsDataURL(file);
            }
        });
        
        // Initialize Lucide icons after DOM content is loaded
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
        });
    </script>
@endsection
