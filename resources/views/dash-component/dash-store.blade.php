@extends('layouts.dashboard')

@section('main')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-[#071952] p-4">
                <h2 class="text-xl font-bold text-white">Laman Dalam Tahap Pengembangan</h2>
            </div>
            
            <div class="p-6">
                <div class="flex items-start space-x-4 mb-6">
                    <div class="bg-blue-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Informasi Penting</h3>
                        <p class="text-gray-600 mb-4">
                            Laman ini masih dalam tahap pengembangan karena memerlukan pengkajian lebih lanjut terkait model bisnis yang akan diterapkan. Sistem ini dirancang untuk melayani kebutuhan para nelayan lokal dan pabrik-pabrik pengolahan ikan di Sulawesi Utara melalui solusi digital yang inovatif.
                        </p>
                    </div>
                </div>
                
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">
                                Perhatian: Fitur-fitur di halaman ini belum tersedia hingga proses pengkajian dan diskusi dengan pihak terkait selesai dilakukan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
