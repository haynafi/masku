@extends('layouts.base')

@section('content')
        <div class="bg-white p-4 sm:p-6 rounded-xl shadow-sm mb-6">
            <!-- Filter and Search -->
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start mb-6 space-y-4 sm:space-y-0">
                <div class="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-4 w-full sm:w-auto">
                    
                </div>
                <div class="flex flex-col space-y-2 w-full sm:w-auto">
                    <button class="bg-[#2E7D32] text-white px-4 py-2 rounded-lg text-sm hover:bg-[#256528] transition duration-200 w-full sm:w-auto">Tambah Pembelian Baru</button>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-6 space-y-4 sm:space-y-0">
                <div class="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-4 w-full">
                    <select class="border border-gray-300 bg-[#FFF2DB] rounded-lg px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#2E7D32]">
                        <option>Filter By</option>
                        <option>Distributor</option>
                        <option>Tanggal</option>
                    </select>
                    <div class="relative flex-1">
                        <input type="text" placeholder="Search" class="border border-gray-300 rounded-lg px-3 py-2 pl-10 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#2E7D32] w-full pr-10">
                        <i data-lucide="search" class="w-5 h-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                    <button class="bg-[#CD9B59] text-white px-4 py-2 rounded-lg text-sm hover:bg-[#A87A45] transition duration-200 sm:w-auto w-full">Search</button>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-separate border-spacing-y-2">
                    <thead>
                        <tr class="bg-gray-100 text-gray-600 text-xs sm:text-sm uppercase">
                            <th class="p-2 sm:p-4 font-medium">No</th>
                            <th class="p-2 sm:p-4 font-medium">Nomor Invoice</th>
                            <th class="p-2 sm:p-4 font-medium">Distributor</th>
                            <th class="p-2 sm:p-4 font-medium">Tanggal Transaksi</th>
                            <th class="p-2 sm:p-4 font-medium">Total Pembelian</th>
                            <th class="p-2 sm:p-4 font-medium hidden sm:table-cell">Created At</th>
                            <th class="p-2 sm:p-4 font-medium hidden sm:table-cell">Created By</th>
                            <th class="p-2 sm:p-4 font-medium"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white rounded-lg shadow-sm text-xs sm:text-sm">
                            <td class="p-2 sm:p-4">1</td>
                            <td class="p-2 sm:p-4">A12B3C</td>
                            <td class="p-2 sm:p-4">Distributor 1</td>
                            <td class="p-2 sm:p-4">2-May-2025</td>
                            <td class="p-2 sm:p-4">Rp10,000,000</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">3-May-2025</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">Napi RS</td>
                            <td class="p-2 sm:p-4">
                                <div class="relative">
                                    <button id="dropdownButton1" class="focus:outline-none text-gray-500 hover:text-gray-700">
                                        <i data-lucide="more-vertical" class="w-5 h-5"></i>
                                    </button>
                                    <div id="dropdownMenu1" class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
                                            <i data-lucide="eye" class="w-4 h-4 mr-2"></i> View
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Edit
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-b-lg">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white rounded-lg shadow-sm text-xs sm:text-sm">
                            <td class="p-2 sm:p-4">2</td>
                            <td class="p-2 sm:p-4">A12B3C</td>
                            <td class="p-2 sm:p-4">Distributor 1</td>
                            <td class="p-2 sm:p-4">3-May-2025</td>
                            <td class="p-2 sm:p-4">Rp10,000,000</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">4-May-2025</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">Api TM</td>
                            <td class="p-2 sm:p-4">
                                <div class="relative">
                                    <button id="dropdownButton2" class="focus:outline-none text-gray-500 hover:text-gray-700">
                                        <i data-lucide="more-vertical" class="w-5 h-5"></i>
                                    </button>
                                    <div id="dropdownMenu2" class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
                                            <i data-lucide="eye" class="w-4 h-4 mr-2"></i> View
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Edit
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-b-lg">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white rounded-lg shadow-sm text-xs sm:text-sm">
                            <td class="p-2 sm:p-4">3</td>
                            <td class="p-2 sm:p-4">A12B3C</td>
                            <td class="p-2 sm:p-4">Distributor 1</td>
                            <td class="p-2 sm:p-4">4-May-2025</td>
                            <td class="p-2 sm:p-4">Rp10,000,000</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">5-May-2025</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">Napi RS</td>
                            <td class="p-2 sm:p-4">
                                <div class="relative">
                                    <button id="dropdownButton3" class="focus:outline-none text-gray-500 hover:text-gray-700">
                                        <i data-lucide="more-vertical" class="w-5 h-5"></i>
                                    </button>
                                    <div id="dropdownMenu3" class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
                                            <i data-lucide="eye" class="w-4 h-4 mr-2"></i> View
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Edit
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-b-lg">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white rounded-lg shadow-sm text-xs sm:text-sm">
                            <td class="p-2 sm:p-4">4</td>
                            <td class="p-2 sm:p-4">A12B3C</td>
                            <td class="p-2 sm:p-4">Distributor 1</td>
                            <td class="p-2 sm:p-4">5-May-2025</td>
                            <td class="p-2 sm:p-4">Rp10,000,000</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">6-May-2025</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">Api TM</td>
                            <td class="p-2 sm:p-4">
                                <div class="relative">
                                    <button id="dropdownButton4" class="focus:outline-none text-gray-500 hover:text-gray-700">
                                        <i data-lucide="more-vertical" class="w-5 h-5"></i>
                                    </button>
                                    <div id="dropdownMenu4" class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
                                            <i data-lucide="eye" class="w-4 h-4 mr-2"></i> View
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Edit
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-b-lg">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white rounded-lg shadow-sm text-xs sm:text-sm">
                            <td class="p-2 sm:p-4">5</td>
                            <td class="p-2 sm:p-4">A12B3C</td>
                            <td class="p-2 sm:p-4">Distributor 1</td>
                            <td class="p-2 sm:p-4">6-May-2025</td>
                            <td class="p-2 sm:p-4">Rp10,000,000</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">7-May-2025</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">Napi RS</td>
                            <td class="p-2 sm:p-4">
                                <div class="relative">
                                    <button id="dropdownButton5" class="focus:outline-none text-gray-500 hover:text-gray-700">
                                        <i data-lucide="more-vertical" class="w-5 h-5"></i>
                                    </button>
                                    <div id="dropdownMenu5" class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
                                            <i data-lucide="eye" class="w-4 h-4 mr-2"></i> View
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Edit
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-b-lg">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white rounded-lg shadow-sm text-xs sm:text-sm">
                            <td class="p-2 sm:p-4">6</td>
                            <td class="p-2 sm:p-4">A12B3C</td>
                            <td class="p-2 sm:p-4">Distributor 1</td>
                            <td class="p-2 sm:p-4">7-May-2025</td>
                            <td class="p-2 sm:p-4">Rp10,000,000</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">8-May-2025</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">Api TM</td>
                            <td class="p-2 sm:p-4">
                                <div class="relative">
                                    <button id="dropdownButton6" class="focus:outline-none text-gray-500 hover:text-gray-700">
                                        <i data-lucide="more-vertical" class="w-5 h-5"></i>
                                    </button>
                                    <div id="dropdownMenu6" class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
                                            <i data-lucide="eye" class="w-4 h-4 mr-2"></i> View
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Edit
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-b-lg">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white rounded-lg shadow-sm text-xs sm:text-sm">
                            <td class="p-2 sm:p-4">7</td>
                            <td class="p-2 sm:p-4">A12B3C</td>
                            <td class="p-2 sm:p-4">Distributor 1</td>
                            <td class="p-2 sm:p-4">8-May-2025</td>
                            <td class="p-2 sm:p-4">Rp10,000,000</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">9-May-2025</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">Napi RS</td>
                            <td class="p-2 sm:p-4">
                                <div class="relative">
                                    <button id="dropdownButton7" class="focus:outline-none text-gray-500 hover:text-gray-700">
                                        <i data-lucide="more-vertical" class="w-5 h-5"></i>
                                    </button>
                                    <div id="dropdownMenu7" class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
                                            <i data-lucide="eye" class="w-4 h-4 mr-2"></i> View
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Edit
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-b-lg">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white rounded-lg shadow-sm text-xs sm:text-sm">
                            <td class="p-2 sm:p-4">8</td>
                            <td class="p-2 sm:p-4">A12B3C</td>
                            <td class="p-2 sm:p-4">Distributor 1</td>
                            <td class="p-2 sm:p-4">9-May-2025</td>
                            <td class="p-2 sm:p-4">Rp10,000,000</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">10-May-2025</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">Api TM</td>
                            <td class="p-2 sm:p-4">
                                <div class="relative">
                                    <button id="dropdownButton8" class="focus:outline-none text-gray-500 hover:text-gray-700">
                                        <i data-lucide="more-vertical" class="w-5 h-5"></i>
                                    </button>
                                    <div id="dropdownMenu8" class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
                                            <i data-lucide="eye" class="w-4 h-4 mr-2"></i> View
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Edit
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-b-lg">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white rounded-lg shadow-sm text-xs sm:text-sm">
                            <td class="p-2 sm:p-4">9</td>
                            <td class="p-2 sm:p-4">A12B3C</td>
                            <td class="p-2 sm:p-4">Distributor 1</td>
                            <td class="p-2 sm:p-4">10-May-2025</td>
                            <td class="p-2 sm:p-4">Rp10,000,000</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">11-May-2025</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">Napi RS</td>
                            <td class="p-2 sm:p-4">
                                <div class="relative">
                                    <button id="dropdownButton9" class="focus:outline-none text-gray-500 hover:text-gray-700">
                                        <i data-lucide="more-vertical" class="w-5 h-5"></i>
                                    </button>
                                    <div id="dropdownMenu9" class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
                                            <i data-lucide="eye" class="w-4 h-4 mr-2"></i> View
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Edit
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-b-lg">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white rounded-lg shadow-sm text-xs sm:text-sm">
                            <td class="p-2 sm:p-4">10</td>
                            <td class="p-2 sm:p-4">A12B3C</td>
                            <td class="p-2 sm:p-4">Distributor 1</td>
                            <td class="p-2 sm:p-4">11-May-2025</td>
                            <td class="p-2 sm:p-4">Rp10,000,000</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">12-May-2025</td>
                            <td class="p-2 sm:p-4 hidden sm:table-cell">Api TM</td>
                            <td class="p-2 sm:p-4">
                                <div class="relative">
                                    <button id="dropdownButton10" class="focus:outline-none text-gray-500 hover:text-gray-700">
                                        <i data-lucide="more-vertical" class="w-5 h-5"></i>
                                    </button>
                                    <div id="dropdownMenu10" class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
                                            <i data-lucide="eye" class="w-4 h-4 mr-2"></i> View
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Edit
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-b-lg">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="flex flex-col sm:flex-row justify-between items-center mt-6 text-xs sm:text-sm space-y-4 sm:space-y-0">
                <button class="px-3 sm:px-4 py-1 sm:py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-200">Previous</button>
                <div class="flex space-x-1 sm:space-x-2">
                    <button class="px-2 sm:px-3 py-1 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">1</button>
                    <button class="px-2 sm:px-3 py-1 bg-gray-800 text-white rounded-lg">2</button>
                    <button class="px-2 sm:px-3 py-1 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">3</button>
                    <span class="px-2 sm:px-3 py-1 text-gray-500">...</span>
                    <button class="px-2 sm:px-3 py-1 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">67</button>
                    <button class="px-2 sm:px-3 py-1 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">68</button>
                </div>
                <button class="px-3 sm:px-4 py-1 sm:py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-200">Next</button>
            </div>
        </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Lucide icons
            lucide.createIcons();

            // Dropdown toggle functionality
            const buttons = document.querySelectorAll('[id^="dropdownButton"]');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const dropdownId = this.id.replace('dropdownButton', 'dropdownMenu');
                    const dropdown = document.getElementById(dropdownId);
                    dropdown.classList.toggle('hidden');
                });
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                buttons.forEach(button => {
                    const dropdownId = button.id.replace('dropdownButton', 'dropdownMenu');
                    const dropdown = document.getElementById(dropdownId);
                    if (!button.contains(e.target) && !dropdown.contains(e.target)) {
                        dropdown.classList.add('hidden');
                    }
                });
            });
        });
    </script>
@endsection