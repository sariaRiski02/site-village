@extends('app.app')


@section('main')

    <!-- Hero -->
    <section id="welcome" class="gap-5 flex flex-col md:flex-row items-center w-full justify-between">
        <div class="flex flex-col justify-between w-full md:gap-8 gap-4">
            <span class="text-2xl md:text-4xl font-bold text-[#071952] text-center md:text-left">
                Selamat Datang di situs  
                <br>
                Desa Kema III –
            </span>
            <span class="text-md text-center md:text-left text-[#071952]">
                Kami dengan bangga menyambut Anda di situs resmi Desa Kema III. Di sini, Anda dapat menemukan informasi terkini tentang pemerintahan, demografi, geografis, dan berita terbaru dari desa kami. Selamat menjelajah!
            </span>
        </div>
        <div class="w-full">
            <img src="{{ asset('images/hero.png') }}" alt="Desa Kema III" class="rounded-lg shadow-lg w-full h-auto">
        </div>
    </section>


    <!-- lead of village -->
    <div class="flex item-center gap-5 h-auto w-full  justify-center">
        <div class="w-2/3">
        <img src="{{ asset('images/kades.png') }}" alt="Leader" class="">
        </div>
        <div class="flex items-center">
            <p class="md:text-md text-sm w-full text-[#071952] ">
                "Semangat gotong royong yang kuat di Desa Kema III adalah bukti nyata dari kebersamaan dan kerja sama antar masyarakat. Setiap warga desa berperan aktif dalam berbagai kegiatan, mulai dari pembangunan infrastruktur hingga acara-acara sosial. Dengan semangat gotong royong, kita dapat mencapai kemajuan dan kesejahteraan bersama.
            <br><br>
            --- Kepala desa kema 3 ---

            </p>
        </div>
    </div>


    <!-- cart berita -->
    <section id="news" class="flex flex-col gap-5"></section>
        <h2 class="text-2xl font-bold text-[#071952] text-center">Berita Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="bg-white rounded-lg shadow-lg p-5">
                <img src="hero.png" alt="News 1" class="rounded-lg mb-3">
                <h3 class="text-lg font-semibold text-[#071952]">Judul Berita 1</h3>
                <p class="text-sm text-gray-700">Deskripsi singkat berita 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="text-sky-800 font-semibold mt-3 inline-block">Baca Selengkapnya</a>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-5">
                <img src="hero.png" alt="News 2" class="rounded-lg mb-3">
                <h3 class="text-lg font-semibold text-[#071952]">Judul Berita 2</h3>
                <p class="text-sm text-gray-700">Deskripsi singkat berita 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="text-sky-800 font-semibold mt-3 inline-block">Baca Selengkapnya</a>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-5">
                <img src="hero.png" alt="News 3" class="rounded-lg mb-3">
                <h3 class="text-lg font-semibold text-[#071952]">Judul Berita 3</h3>
                <p class="text-sm text-gray-700">Deskripsi singkat berita 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="text-sky-800 font-semibold mt-3 inline-block">Baca Selengkapnya</a>
            </div>
        </div>
    </section>

    <!-- Struktur Pemerintahan Desa -->
    <section id="government-structure" class="flex flex-col gap-5">
        <h2 class="text-2xl font-bold text-[#071952] text-center">Struktur Pemerintahan Desa</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="bg-white rounded-lg shadow-lg p-5">
                <h3 class="text-lg font-semibold text-[#071952]">Kepala Desa</h3>
                <p class="text-sm text-gray-700">Nama Kepala Desa</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-5">
                <h3 class="text-lg font-semibold text-[#071952]">Sekretaris Desa</h3>
                <p class="text-sm text-gray-700">Nama Sekretaris Desa</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-5">
                <h3 class="text-lg font-semibold text-[#071952]">Bendahara Desa</h3>
                <p class="text-sm text-gray-700">Nama Bendahara Desa</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-5">
                <h3 class="text-lg font-semibold text-[#071952]">Kepala Urusan Pemerintahan</h3>
                <p class="text-sm text-gray-700">Nama Kepala Urusan Pemerintahan</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-5">
                <h3 class="text-lg font-semibold text-[#071952]">Kepala Urusan Pembangunan</h3>
                <p class="text-sm text-gray-700">Nama Kepala Urusan Pembangunan</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-5">
                <h3 class="text-lg font-semibold text-[#071952]">Kepala Urusan Kesejahteraan</h3>
                <p class="text-sm text-gray-700">Nama Kepala Urusan Kesejahteraan</p>
            </div>
        </div>
    </section>  
@endsection
