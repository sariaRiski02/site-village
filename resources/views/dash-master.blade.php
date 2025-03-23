@extends('layouts.dashboard')

@section('main')
<!-- Main dashboard content with proper spacing from header -->
<div class="p-4">
    <!-- Quick Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-blue-500">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-500 text-sm">Total Penduduk</p>
                    <h3 class="text-2xl font-bold">2,458</h3>
                    <p class="text-green-500 text-xs mt-1">+15 dari bulan lalu</p>
                </div>
                <div class="rounded-full bg-blue-100 p-3">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-green-500">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-500 text-sm">Permohonan Dokumen</p>
                    <h3 class="text-2xl font-bold">24</h3>
                    <p class="text-yellow-500 text-xs mt-1">12 belum diproses</p>
                </div>
                <div class="rounded-full bg-green-100 p-3">
                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-purple-500">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-500 text-sm">Pengunjung Hari Ini</p>
                    <h3 class="text-2xl font-bold">142</h3>
                    <p class="text-green-500 text-xs mt-1">+28% dari kemarin</p>
                </div>
                <div class="rounded-full bg-purple-100 p-3">
                    <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-yellow-500">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-500 text-sm">Dana Desa Tersisa</p>
                    <h3 class="text-2xl font-bold">45%</h3>
                    <p class="text-red-500 text-xs mt-1">Target: 35%</p>
                </div>
                <div class="rounded-full bg-yellow-100 p-3">
                    <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Chart Section Row 1 -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow-md p-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Pengunjung Website</h3>
                <div class="flex space-x-2">
                    <select class="text-xs rounded border-gray-300 p-1">
                        <option>7 Hari Terakhir</option>
                        <option>30 Hari Terakhir</option>
                        <option>Tahun Ini</option>
                    </select>
                    <button class="bg-gray-100 p-1 rounded">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <canvas id="visitorChart" height="250"></canvas>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Komposisi Penduduk</h3>
                <button class="bg-gray-100 p-1 rounded">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </button>
            </div>
            <canvas id="demographicChart" height="250"></canvas>
        </div>
    </div>
    
    <!-- Chart Section Row 2 -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow-md p-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Penyerapan Dana Desa</h3>
                <select class="text-xs rounded border-gray-300 p-1">
                    <option>2024</option>
                    <option>2023</option>
                    <option>2022</option>
                </select>
            </div>
            <canvas id="budgetChart" height="250"></canvas>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Layanan Paling Banyak Diakses</h3>
                <select class="text-xs rounded border-gray-300 p-1">
                    <option>Bulan Ini</option>
                    <option>3 Bulan Terakhir</option>
                    <option>Tahun Ini</option>
                </select>
            </div>
            <canvas id="servicesChart" height="250"></canvas>
        </div>
    </div>
    
    <!-- Recent Activity Table -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">Aktivitas Terbaru</h3>
            <button class="text-sm text-blue-500 hover:underline">Lihat Semua</button>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pengguna</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aktivitas</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 bg-gray-200 rounded-full"></div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Ahmad Sulaiman</div>
                                    <div class="text-sm text-gray-500">admin@desa.id</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Memperbarui profil desa</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">10 menit yang lalu</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 bg-gray-200 rounded-full"></div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Siti Aminah</div>
                                    <div class="text-sm text-gray-500">staff@desa.id</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Menambahkan berita baru</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">45 menit yang lalu</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Terpublikasi</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 bg-gray-200 rounded-full"></div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Budi Santoso</div>
                                    <div class="text-sm text-gray-500">kades@desa.id</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Menyetujui permohonan dokumen</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">2 jam yang lalu</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Diproses</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Visitor Chart
    const visitorCtx = document.getElementById('visitorChart').getContext('2d');
    const visitorChart = new Chart(visitorCtx, {
        type: 'line',
        data: {
            labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
            datasets: [{
                label: 'Pengunjung',
                data: [120, 132, 101, 134, 90, 72, 95],
                fill: true,
                backgroundColor: 'rgba(59, 130, 246, 0.2)',
                borderColor: 'rgba(59, 130, 246, 1)',
                borderWidth: 2,
                tension: 0.4,
                pointBackgroundColor: 'rgba(59, 130, 246, 1)',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 4
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        display: true,
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Demographic Chart
    const demographicCtx = document.getElementById('demographicChart').getContext('2d');
    const demographicChart = new Chart(demographicCtx, {
        type: 'doughnut',
        data: {
            labels: ['Anak-anak', 'Remaja', 'Dewasa', 'Lansia'],
            datasets: [{
                data: [458, 650, 1100, 250],
                backgroundColor: [
                    'rgba(59, 130, 246, 0.8)',
                    'rgba(16, 185, 129, 0.8)',
                    'rgba(245, 158, 11, 0.8)',
                    'rgba(236, 72, 153, 0.8)'
                ],
                borderWidth: 0
            }]
        },
        options: {
            plugins: {
                legend: {
                    position: 'bottom'
                }
            },
            cutout: '70%',
            radius: '90%'
        }
    });

    // Budget Chart
    const budgetCtx = document.getElementById('budgetChart').getContext('2d');
    const budgetChart = new Chart(budgetCtx, {
        type: 'bar',
        data: {
            labels: ['Q1', 'Q2', 'Q3', 'Q4'],
            datasets: [{
                label: 'Anggaran',
                data: [250, 200, 220, 180],
                backgroundColor: 'rgba(107, 114, 128, 0.7)',
                borderRadius: 5
            }, {
                label: 'Realisasi',
                data: [200, 180, 190, 0],  // Q4 belum terealisasi
                backgroundColor: 'rgba(59, 130, 246, 0.9)',
                borderRadius: 5
            }]
        },
        options: {
            plugins: {
                legend: {
                    position: 'bottom'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Dalam Juta Rupiah'
                    },
                    grid: {
                        display: true,
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            },
            barPercentage: 0.7
        }
    });

    // Services Chart
    const servicesCtx = document.getElementById('servicesChart').getContext('2d');
    const servicesChart = new Chart(servicesCtx, {
        type: 'bar',
        data: {
            labels: ['Surat Pengantar', 'Kartu Keluarga', 'KTP', 'Akta Lahir', 'SKCK', 'Lainnya'],
            datasets: [{
                axis: 'y',
                data: [65, 42, 38, 25, 18, 12],
                backgroundColor: [
                    'rgba(59, 130, 246, 0.8)',
                    'rgba(16, 185, 129, 0.8)',
                    'rgba(245, 158, 11, 0.8)',
                    'rgba(236, 72, 153, 0.8)',
                    'rgba(139, 92, 246, 0.8)',
                    'rgba(107, 114, 128, 0.8)'
                ],
                borderRadius: 5
            }]
        },
        options: {
            indexAxis: 'y',
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    beginAtZero: true,
                    grid: {
                        display: true,
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                y: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
});
</script>
@endsection