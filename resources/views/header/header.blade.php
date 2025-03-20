 <!-- Header -->
 <header id="header" class="fixed z-50 left-0 top-0 w-full h-20 flex items-center pt-2 px-3 md:px-15">
    <div class="h-full w-full bg-[#071952] rounded-[1vw] flex justify-between items-center px-10 shadow-lg">
        <div class="md:hidden flex items-center">
            <button id="toggleSidebar" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <div id="logo" class="text-white font-bold text-lg">Kema3</div>
        <div id="navbar" class="gap-2 text-white hidden md:flex">
            <a href="{{ route('home') }}" class="text-white font-semibold text-sm {{ Route::is('home') ? 'bg-blue-900 rounded-md' : '' }} ">
                <div class="p-3 hover:bg-sky-800 rounded-[1vw]">
                    Beranda
                </div>
            </a>
            <a href="{{ route('gov') }}" class="text-white font-semibold text-sm {{ Route::is('gov') ? 'bg-blue-900 rounded-md' : '' }}">
                <div class="p-3 hover:bg-sky-800 rounded-[1vw]">
                    Pemerintahan
                </div>
            </a>
            <a href="{{ route('demo') }}" class="text-white font-semibold text-sm {{ Route::is('demo') ? 'bg-blue-900 rounded-md' : '' }}">
                <div class="p-3 hover:bg-sky-800 rounded-[1vw]">
                    Demografi
                </div>
            </a>
            <a href="{{ route('geo') }}" class="text-white font-semibold text-sm {{ Route::is('geo') ? 'bg-blue-900 rounded-md' : '' }}">
                <div class="p-3 hover:bg-sky-800 rounded-[1vw]">
                    Geografis
                </div>
            </a>
            <a href="{{ route('news') }}" class="text-white font-semibold text-sm {{ Route::is('news') ? 'bg-blue-900 rounded-md' : '' }}">
                <div class="p-3 hover:bg-sky-800 rounded-[1vw]">
                    Berita
                </div>
            </a>
            <a href="{{ route('service') }}" class="text-white font-semibold text-sm {{ Route::is('service') ? 'bg-blue-900 rounded-md' : '' }}">
                <div class="p-3 hover:bg-sky-800 rounded-[1vw]">
                    Layanan
                </div>
            </a>
            
        </div>
    </div>

    <div id="sidebar" class="h-screen w-55 bg-white fixed left-0 top-0 z-50 flex flex-col px-2 shadow-lg transition-all duration-300 -translate-x-full">
        
        <div class="h-16 bg-[#071952]  mt-2 flex items-center pl-3 rounded">
            <span class="text-white font-bold text-lg">Kema 3</span>
        </div>

        <a href="{{ route('home') }}" class="flex items-center p-3 hover:bg-gray-100 rounded-lg">
            <!-- Ikon Rumah untuk Beranda -->
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M4 10v10h5v-6h6v6h5V10"></path>
            </svg>
            <span class="font-semibold text-sm">Beranda</span>
        </a>
        
        <a href="{{ route('gov') }}" class="flex items-center p-3 hover:bg-gray-100 rounded-lg">
            <!-- Ikon Gedung untuk Pemerintahan -->
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M5 10V7a7 7 0 0114 0v3M5 10v10h14V10"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 21V13h6v8"></path>
            </svg>
            <span class="font-semibold text-sm">Pemerintahan</span>
        </a>
        
        <a href="{{ route('demo') }}" class="flex items-center p-3 hover:bg-gray-100 rounded-lg">
            <!-- Ikon Orang untuk Demografi -->
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 14c3 0 5 2 5 5v1H3v-1c0-3 2-5 5-5"></path>
                <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2" fill="none"></circle>
            </svg>
            <span class="font-semibold text-sm">Demografi</span>
        </a>
        
        <a href="{{ route('geo') }}" class="flex items-center p-3 hover:bg-gray-100 rounded-lg">
            <!-- Ikon Peta untuk Geografis -->
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l6-3 6 3 6-3v13l-6 3-6-3-6 3V8z"></path>
            </svg>
            <span class="font-semibold text-sm">Geografis</span>
        </a>
        <a href="" class="flex items-center p-3 hover:bg-gray-100 rounded-lg">
            <!-- Ikon Berita/Koran untuk Berita -->
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5h16v14H4V5z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 8h8M8 12h8M8 16h4"></path>
            </svg>
            <span class="font-semibold text-sm">Berita</span>
        </a>
        <a href="{{ route('service') }}" class="flex items-center p-3 hover:bg-gray-100 rounded-lg">
            <!-- Ikon Informasi -->
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 1010 10A10 10 0 0012 2z"></path>
            </svg>
            <span class="font-semibold text-sm">Layanan</span>
        </a>
       
    </div>
    
    <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden"></div>


</header>