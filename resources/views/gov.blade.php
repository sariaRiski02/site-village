@extends('app.app')

@section('main')
    
        <!-- Hero Section -->
    <section id="beranda" class="hero-image text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl text-[#071952] font-bold mb-4">Pemerintahan Desa Kema 3</h2>
            <p class="text-xl mb-8">"Bersama membangun desa yang mandiri dan berdaya saing."</p>
            <div class="flex justify-center space-x-4">
                <a href="#layanan" class="bg-[#071952] hover:bg-[#fbfbfb] hover:text-[#071952]  text-white px-6 py-3 rounded-lg font-semibold transition duration-300">Layanan Online</a>
                <a href="#profil" class="bg-white hover:bg-[#071952] hover:text-white  text-[#071952]  border-2 px-6 py-3 rounded-lg font-semibold transition duration-300">Tentang Desa</a>
            </div>
        </div>
    </section>

    <!-- Profil Desa -->
    <section id="profil" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Profil Desa Sejahtera</h2>
                <div class="w-24 h-1 bg-[#071952] mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <img src="{{ asset('images/hero.png') }}" alt="Foto Desa" class="rounded-lg shadow-lg w-full h-auto">
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Sejarah Singkat</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem ad voluptates maxime totam earum natus facere mollitia? Minus perferendis odio, accusamus temporibus quos aliquam quisquam voluptas, asperiores ad tempore quam.</p>
                    <div class="grid grid-cols-2 gap-4 mt-6">
                        <div class="bg-[#edf1ff] p-4 rounded-lg">
                            <h4 class="font-bold text-[#071952]">Luas Wilayah</h4>
                            <p>650 Hektar</p>
                        </div>
                        <div class="bg-[#edf1ff] p-4 rounded-lg">
                            <h4 class="font-bold text-[#071952]">Jumlah Penduduk</h4>
                            <p>3.250 Jiwa</p>
                        </div>
                        <div class="bg-[#edf1ff] p-4 rounded-lg">
                            <h4 class="font-bold text-[#071952]">Jumlah KK</h4>
                            <p>867 KK</p>
                        </div>
                        <div class="bg-[#edf1ff] p-4 rounded-lg">
                            <h4 class="font-bold text-[#071952]">Potensi Unggulan</h4>
                            <p>Pertanian & Wisata</p>
                        </div>
                    </div>
                    <a href="#" class="inline-block mt-6 bg-[#071952] hover:bg-white hover:text-[#071952] text-white px-6 py-2 rounded-lg font-semibold transition duration-300">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Pemerintahan -->
    <section id="pemerintahan" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Struktur Pemerintahan</h2>
                <div class="w-24 h-1 bg-[#071952] mx-auto"></div>
                <p class="mt-4 text-gray-600">Struktur organisasi pemerintahan Desa Sejahtera periode 2022-2027</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Kepala Desa -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/api/placeholder/400/300" alt="Kepala Desa" class="w-full h-64 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Bapak Suryono</h3>
                        <p class="text-[#071952] font-medium">Kepala Desa</p>
                        <p class="text-[#071952] mt-2">Memimpin penyelenggaraan pemerintahan desa dan bertanggung jawab atas kesejahteraan masyarakat.</p>
                    </div>
                </div>
                <!-- Sekretaris Desa -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/api/placeholder/400/300" alt="Sekretaris Desa" class="w-full h-64 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Ibu Maharani</h3>
                        <p class="text-[#071952] font-medium">Sekretaris Desa</p>
                        <p class="text-gray-600 mt-2">Bertanggung jawab dalam administrasi dan manajemen pemerintahan desa.</p>
                    </div>
                </div>
                <!-- BPD -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/api/placeholder/400/300" alt="Ketua BPD" class="w-full h-64 object-cover object-center">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Bapak Riyanto</h3>
                        <p class="text-gray-600 font-medium">Ketua BPD</p>
                        <p class="text-gray-600 mt-2">Memimpin Badan Permusyawaratan Desa yang mewakili aspirasi masyarakat.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="#" class="inline-block bg-[#071952] hover:bg-[#a3b9ff] text-white px-6 py-2 rounded-lg font-semibold transition duration-300">Lihat Struktur Lengkap</a>
            </div>
        </div>
    </section>

    <!-- Layanan -->
    <section id="layanan" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Layanan Masyarakat</h2>
                <div class="w-24 h-1 bg-[#071952] mx-auto"></div>
                <p class="mt-4 text-gray-600">Kami berkomitmen memberikan pelayanan terbaik untuk warga Desa Sejahtera</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-blue-50 p-6 rounded-lg text-center hover:shadow-lg transition duration-300">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Administrasi Kependudukan</h3>
                    <p class="text-gray-600">Pembuatan surat pengantar KTP, KK, Akte Kelahiran, dan dokumen kependudukan lainnya.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-lg text-center hover:shadow-lg transition duration-300">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Perizinan</h3>
                    <p class="text-gray-600">Pengurusan surat izin usaha, izin keramaian, dan berbagai jenis perizinan tingkat desa.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-lg text-center hover:shadow-lg transition duration-300">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Pertanahan</h3>
                    <p class="text-gray-600">Surat keterangan tanah, surat jual beli tanah, dan administrasi pertanahan lainnya.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-lg text-center hover:shadow-lg transition duration-300">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#071952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Bantuan Sosial</h3>
                    <p class="text-gray-600">Informasi dan pendaftaran program bantuan sosial dari pemerintah pusat dan daerah.</p>
                </div>
            </div>
            <div class="bg-blue-100 rounded-lg p-8 mt-12">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Formulir Layanan Online</h3>
                        <p class="text-gray-600">Ajukan permohonan layanan secara online untuk mempercepat proses administrasi</p>
                    </div>
                    <a href="#" class="mt-4 md:mt-0 bg-[#071952] hover:bg-[#4f6099f9] text-white px-6 py-3 rounded-lg font-semibold transition duration-300">Ajukan Permohonan</a>
                </div>
            </div>
        </div>
    </section>
@endsection