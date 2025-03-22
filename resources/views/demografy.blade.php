@extends('app.app')

@section('main')
    <!-- Hero Section -->
    <section class="bg-[#071952] rounded-xl text-white py-12 sm:mt-3 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-4">Demografi Desa Kema 3</h2>
            <p class="text-xl mb-2">Data Statistik dan Informasi Kependudukan</p>
            <div class="w-24 h-1 bg-white mx-auto"></div>
        </div>
    </section>

    <!-- Informasi Umum -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Informasi Umum Kependudukan</h2>
                <div class="w-24 h-1 bg-[#071952] mx-auto"></div>
                <p class="mt-4 text-gray-600">Data kependudukan Desa Kema 3 berdasarkan hasil sensus terakhir (2024)</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <div class="bg-blue-50 p-6 rounded-lg text-center hover:shadow-lg transition duration-300">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">3.250</h3>
                    <p class="text-gray-600 font-medium">Total Penduduk</p>
                </div>
                
                <div class="bg-blue-50 p-6 rounded-lg text-center hover:shadow-lg transition duration-300">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">867</h3>
                    <p class="text-gray-600 font-medium">Jumlah Keluarga (KK)</p>
                </div>
                
                <div class="bg-blue-50 p-6 rounded-lg text-center hover:shadow-lg transition duration-300">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">1.672</h3>
                    <p class="text-gray-600 font-medium">Laki-laki</p>
                </div>
                
                <div class="bg-blue-50 p-6 rounded-lg text-center hover:shadow-lg transition duration-300">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">1.578</h3>
                    <p class="text-gray-600 font-medium">Perempuan</p>
                </div>
            </div>
            
            <!-- Tambahan Statistik -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Kepadatan Penduduk</h3>
                    <div class="flex items-center">
                        <div class="bg-[#071952] h-16 w-16 rounded-lg flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold text-gray-800">5</span>
                            <span class="text-gray-600">Jiwa/Hektar</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Rata-rata Anggota Keluarga</h3>
                    <div class="flex items-center">
                        <div class="bg-[#071952] h-16 w-16 rounded-lg flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold text-gray-800">3,7</span>
                            <span class="text-gray-600">Orang/Keluarga</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Laju Pertumbuhan</h3>
                    <div class="flex items-center">
                        <div class="bg-[#071952] h-16 w-16 rounded-lg flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold text-gray-800">1,2%</span>
                            <span class="text-gray-600">Per Tahun</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Grafik Distribusi Penduduk -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Grafik Distribusi Penduduk</h2>
                <div class="w-24 h-1 bg-[#071952] mx-auto"></div>
                <p class="mt-4 text-gray-600">Visualisasi data kependudukan Desa Kema 3 berdasarkan berbagai kategori</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <div id="chartUsia" style="height: 400px; width: 100%;"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div id="chartPendidikan" style="height: 400px; width: 100%;"></div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div id="chartPekerjaan" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tabel Data Kependudukan -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Data Kependudukan Per Dusun</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                <p class="mt-4 text-gray-600">Rincian data penduduk berdasarkan pembagian wilayah administratif Desa Kema 3</p>
            </div>
            
            <div class="overflow-x-auto bg-white rounded-lg shadow">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-[#071952] text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nama Dusun</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Jumlah KK</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Laki-laki</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Perempuan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Total Penduduk</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">Dusun 1</td>
                            <td class="px-6 py-4 whitespace-nowrap">238</td>
                            <td class="px-6 py-4 whitespace-nowrap">462</td>
                            <td class="px-6 py-4 whitespace-nowrap">436</td>
                            <td class="px-6 py-4 whitespace-nowrap font-medium">898</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">Dusun 2</td>
                            <td class="px-6 py-4 whitespace-nowrap">217</td>
                            <td class="px-6 py-4 whitespace-nowrap">413</td>
                            <td class="px-6 py-4 whitespace-nowrap">398</td>
                            <td class="px-6 py-4 whitespace-nowrap font-medium">811</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">Dusun 3</td>
                            <td class="px-6 py-4 whitespace-nowrap">186</td>
                            <td class="px-6 py-4 whitespace-nowrap">368</td>
                            <td class="px-6 py-4 whitespace-nowrap">342</td>
                            <td class="px-6 py-4 whitespace-nowrap font-medium">710</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">Dusun 4</td>
                            <td class="px-6 py-4 whitespace-nowrap">226</td>
                            <td class="px-6 py-4 whitespace-nowrap">429</td>
                            <td class="px-6 py-4 whitespace-nowrap">402</td>
                            <td class="px-6 py-4 whitespace-nowrap font-medium">831</td>
                        </tr>
                        <tr class="bg-blue-50">
                            <td class="px-6 py-4 whitespace-nowrap font-bold">Total</td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">867</td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">1.672</td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">1.578</td>
                            <td class="px-6 py-4 whitespace-nowrap font-bold">3.250</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="mt-8 text-center">
                <a href="#" class="inline-block bg-[#071952] hover:bg-blue-900 text-white px-6 py-2 rounded-lg font-semibold transition duration-300">Unduh Data Demografi Lengkap</a>
            </div>
        </div>
    </section>
    
@endsection

@push('script')
<script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script src="//{{ request()->getHost() }}/js/chart.js"></script>
    {{-- <script src="//{{ request()->getHost() }}/js/sidebar.js"></script> --}}
@endpush