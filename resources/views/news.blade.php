
@extends('app.app')

   @section('main')
       
    <!-- Berita Terbaru --> 
    <section class="py-5 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Berita Terbaru</h2>
                <div class="w-24 h-1 bg-[#071952] mx-auto"></div>
                <p class="mt-4 text-gray-600">Informasi dan kegiatan terbaru di Desa Kema 3</p>
            </div>
            
            <!-- Featured News -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-10">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <img src="{{ asset('images/hero.png') }}" alt="Program Vaksinasi" class="w-full h-full object-cover">
                    </div>
                    <div class="md:w-1/2 p-6">
                        <div class="text-[#071952] text-sm font-bold mb-2">15 Maret 2025</div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Program Vaksinasi COVID-19 di Desa Kema 3 Mencapai 95% dari Target</h3>
                        <p class="text-gray-600 mb-6">Program vaksinasi COVID-19 di Desa Kema 3 telah berhasil mencapai 95% dari target. Keberhasilan ini merupakan hasil kerja sama yang baik antara pemerintah desa, tenaga kesehatan, dan partisipasi aktif warga desa.</p>
                        <a href="#" class="inline-block bg-[#071952] text-white px-6 py-2 rounded-md hover:bg-bluez-800 transition duration-300">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            
            <!-- News Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- News Item 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/hero.png') }}" alt="Pembangunan Jalan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-[#071952] text-sm font-bold mb-2">10 Maret 2025</div>
                        <h3 class="font-bold text-xl mb-2">Pembangunan Jalan Desa Rampung</h3>
                        <p class="text-gray-600 mb-4">Proyek pembangunan jalan desa sepanjang 2 kilometer telah rampung. Jalan ini akan memudahkan akses warga ke pusat desa dan kecamatan.</p>
                        <a href="#" class="text-[#071952] font-semibold hover:text-bluez-800">Baca Selengkapnya →</a>
                    </div>
                </div>

                <!-- News Item 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/hero.png') }}" alt="Pelatihan Pertanian" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-[#071952] text-sm font-bold mb-2">5 Maret 2025</div>
                        <h3 class="font-bold text-xl mb-2">Pelatihan Pertanian Organik untuk Petani Desa</h3>
                        <p class="text-gray-600 mb-4">Sebanyak 30 petani desa mengikuti pelatihan pertanian organik yang diselenggarakan oleh pemerintah desa bekerjasama dengan Dinas Pertanian.</p>
                        <a href="#" class="text-[#071952] font-semibold hover:text-bluez-800">Baca Selengkapnya →</a>
                    </div>
                </div>

                <!-- News Item 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/hero.png') }}" alt="Pembukaan BUMDES" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-[#071952] text-sm font-bold mb-2">28 Februari 2025</div>
                        <h3 class="font-bold text-xl mb-2">BUMDES Baru Dibuka untuk Tingkatkan Ekonomi Desa</h3>
                        <p class="text-gray-600 mb-4">Badan Usaha Milik Desa (BUMDES) "Kema 3 Bersama" resmi dibuka. BUMDES ini akan fokus pada pengembangan produk-produk lokal.</p>
                        <a href="#" class="text-[#071952] font-semibold hover:text-bluez-800">Baca Selengkapnya →</a>
                    </div>
                </div>

                <!-- News Item 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/hero.png') }}" alt="Festival Budaya" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-[#071952] text-sm font-bold mb-2">20 Februari 2025</div>
                        <h3 class="font-bold text-xl mb-2">Festival Budaya Tahunan Desa Kema 3</h3>
                        <p class="text-gray-600 mb-4">Festival budaya tahunan Desa Kema 3 digelar dengan meriah. Acara ini menampilkan berbagai kesenian tradisional dan kuliner khas desa.</p>
                        <a href="#" class="text-[#071952] font-semibold hover:text-bluez-800">Baca Selengkapnya →</a>
                    </div>
                </div>

                <!-- News Item 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/hero.png') }}" alt="Program Beasiswa" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-[#071952] text-sm font-bold mb-2">15 Februari 2025</div>
                        <h3 class="font-bold text-xl mb-2">Program Beasiswa untuk Siswa Berprestasi</h3>
                        <p class="text-gray-600 mb-4">Pemerintah Desa Kema 3 meluncurkan program beasiswa untuk siswa berprestasi. Program ini akan membantu 10 siswa melanjutkan pendidikan ke jenjang yang lebih tinggi.</p>
                        <a href="#" class="text-[#071952] font-semibold hover:text-bluez-800">Baca Selengkapnya →</a>
                    </div>
                </div>

                <!-- News Item 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/hero.png') }}" alt="Posyandu" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-[#071952] text-sm font-bold mb-2">10 Februari 2025</div>
                        <h3 class="font-bold text-xl mb-2">Renovasi Posyandu Desa Selesai Dilaksanakan</h3>
                        <p class="text-gray-600 mb-4">Renovasi Posyandu Desa Kema 3 telah selesai dilaksanakan. Fasilitas kesehatan ini dilengkapi dengan peralatan baru untuk meningkatkan kualitas layanan kesehatan.</p>
                        <a href="#" class="text-[#071952] font-semibold hover:text-bluez-800">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="inline-flex rounded-md shadow">
                    <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50 rounded-l-md">
                        Sebelumnya
                    </a>
                    <a href="#" class="py-2 px-4 bg-white border-t border-b border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">
                        1
                    </a>
                    <a href="#" class="py-2 px-4 bg-[#071952] border border-[#071952] text-sm font-medium text-white">
                        2
                    </a>
                    <a href="#" class="py-2 px-4 bg-white border-t border-b border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">
                        3
                    </a>
                    <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50 rounded-r-md">
                        Selanjutnya
                    </a>
                </nav>
            </div>
        </div>
    </section>

    <!-- Kategori Berita -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Kategori Berita</h2>
                <div class="w-24 h-1 bg-[#071952] mx-auto"></div>
                <p class="mt-4 text-gray-600">Pilih kategori untuk melihat berita berdasarkan topik</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                <a href="#" class="bg-white py-6 px-4 rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="inline-block p-3 bg-bluez-100 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg">Pemerintahan</h3>
                    <p class="text-gray-600 text-sm">12 berita</p>
                </a>
                
                <a href="#" class="bg-white py-6 px-4 rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="inline-block p-3 bg-bluez-100 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg">Ekonomi</h3>
                    <p class="text-gray-600 text-sm">8 berita</p>
                </a>
                
                <a href="#" class="bg-white py-6 px-4 rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="inline-block p-3 bg-bluez-100 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg">Kesehatan</h3>
                    <p class="text-gray-600 text-sm">15 berita</p>
                </a>
                
                <a href="#" class="bg-white py-6 px-4 rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="inline-block p-3 bg-bluez-100 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg">Pendidikan</h3>
                    <p class="text-gray-600 text-sm">10 berita</p>
                </a>
                
                <a href="#" class="bg-white py-6 px-4 rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="inline-block p-3 bg-bluez-100 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg">Sosial</h3>
                    <p class="text-gray-600 text-sm">7 berita</p>
                </a>
                
                <a href="#" class="bg-white py-6 px-4 rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="inline-block p-3 bg-bluez-100 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg">Lingkungan</h3>
                    <p class="text-gray-600 text-sm">9 berita</p>
                </a>
                
                <a href="#" class="bg-white py-6 px-4 rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="inline-block p-3 bg-bluez-100 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg">Budaya</h3>
                    <p class="text-gray-600 text-sm">6 berita</p>
                </a>
                
                <a href="#" class="bg-white py-6 px-4 rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="inline-block p-3 bg-bluez-100 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg">Komunitas</h3>
                    <p class="text-gray-600 text-sm">5 berita</p>
                </a>
            </div>
        </div>
    </section>

   @endsection
