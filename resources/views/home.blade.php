@extends('layouts.app')


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
                @if ($data->welcome_message)
                    "{{ $data->welcome_message }}"
                @else
                    Kami dengan bangga menyambut Anda di situs resmi Desa Kema III. Di sini, Anda dapat menemukan informasi terkini tentang pemerintahan, demografi, geografis, dan berita terbaru dari desa kami. Selamat menjelajah!
                @endif
            </span>
        </div>
        <div class="w-full">
            <img src="{{ asset('/images/'.$data->hero_image ?? $default_hero) }}" alt="Desa Kema III" class="rounded-lg shadow-lg w-full h-auto">
        </div>
    </section>


     <!-- lead of village -->
     <div class="flex item-center gap-5 h-auto w-full  justify-center">
        <div class="w-2/3">
        <img src="{{ asset('images/' . $data->kades_image ?? $default_kades) }}" alt="Leader" class="">
        </div>
        <div class="flex items-center">
            <p class="md:text-md text-sm w-full text-[#071952] ">
                @if ($data->kades_message)
                    "{{ $data->kades_message }}"
                @else
                    "Semangat gotong royong yang kuat di Desa Kema III adalah bukti nyata dari kebersamaan dan kerja sama antar masyarakat. Setiap warga desa berperan aktif dalam berbagai kegiatan, mulai dari pembangunan infrastruktur hingga acara-acara sosial. Dengan semangat gotong royong, kita dapat mencapai kemajuan dan kesejahteraan bersama."
                @endif
                
            <br><br>
            --- Kepala desa kema 3 ---

            </p>
        </div>
    </div>



    <!-- BUMDes Section -->
    @if ($data->is_bumdes)
        
    <section id="bumdes" class="flex flex-col md:flex-row items-center w-full justify-between gap-5 bg-sky-50 p-6 rounded-lg shadow-sm">
        <div class="w-full md:w-1/2">
            <img src="{{ asset('images/'.$default_hero) }}" alt="BUMDes Kema III" class="rounded-lg shadow-lg w-full h-auto">
        </div>
        <div class="flex flex-col justify-between w-full md:w-1/2 md:gap-8 gap-4">
            <h2 class="text-2xl md:text-3xl font-bold text-[#071952]">BUMDes Kema III</h2>
            <p class="text-md text-[#071952]">
                Desa Kema III dengan bangga memiliki Badan Usaha Milik Desa (BUMDes) yang berkolaborasi dengan salah satu pengembang perangkat lunak yang berperan penting dalam melayani kebutuhan para nelayan lokal dan pabrik-pabrik pengolahan ikan di Sulawesi Utara melalui sistem digital kami.
            </p>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
                <div class="flex flex-col items-center text-center">
                    <div class="bg-[#071952] p-3 rounded-full mb-2 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-[#071952]">Platform Digital</span>
                </div>
                
                <div class="flex flex-col items-center text-center">
                    <div class="bg-[#071952] p-3 rounded-full mb-2 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-[#071952]">Transaksi Online</span>
                </div>
                
                <div class="flex flex-col items-center text-center">
                    <div class="bg-[#071952] p-3 rounded-full mb-2 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-[#071952]">Hubungkan Langsung</span>
                </div>
                
                <div class="flex flex-col items-center text-center">
                    <div class="bg-[#071952] p-3 rounded-full mb-2 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium text-[#071952]">Jaminan Kualitas</span>
                </div>
            </div>
            
            <p class="text-md text-[#071952] mt-4">
                Melalui sistem digital kami, BUMDes Kema III mempertemukan nelayan lokal dengan pabrik pengolahan ikan secara langsung. Platform kami memungkinkan transaksi lebih efisien, harga lebih transparan, dan distribusi lebih cepat untuk hasil laut berkualitas di seluruh Sulawesi Utara.
            </p>
            
            <a href="#" class="bg-[#071952] text-white px-6 py-2 rounded-lg mt-3 inline-block w-fit hover:bg-blue-900 transition">Lihat aplikasi</a>
        </div>
    </section>
    @endif


   

    <!-- cart berita -->
    <section id="news" class="flex flex-col gap-5"></section>
        <h2 class="text-2xl font-bold text-[#071952] text-center">Berita Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="bg-white rounded-lg shadow-lg p-5">
                <img src="{{ asset('images/hero.png') }}" alt="News 1" class="rounded-lg mb-3">
                <h3 class="text-lg font-semibold text-[#071952]">Judul Berita 1</h3>
                <p class="text-sm text-gray-700">Deskripsi singkat berita 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="text-sky-800 font-semibold mt-3 inline-block">Baca Selengkapnya</a>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-5">
                <img src="{{ asset('images/hero.png') }}" alt="News 2" class="rounded-lg mb-3">
                <h3 class="text-lg font-semibold text-[#071952]">Judul Berita 2</h3>
                <p class="text-sm text-gray-700">Deskripsi singkat berita 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="text-sky-800 font-semibold mt-3 inline-block">Baca Selengkapnya</a>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-5">
                <img src="{{ asset('images/hero.png') }}" alt="News 3" class="rounded-lg mb-3">
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
