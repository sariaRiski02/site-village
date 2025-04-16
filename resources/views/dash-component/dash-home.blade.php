@extends('layouts.dashboard')

@section('main')

{{-- alert notification jika ada perubahan data --}}
@session('success')
    <div class="fixed top-4 left-1/2 transform -translate-x-1/2 px-6 py-4 bg-green-100 border border-green-400 text-green-700 rounded-lg shadow-xl z-50 w-3/4 max-w-4xl" role="alert">
        <div class="flex items-center">
            <svg class="w-8 h-8 mr-3 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <strong class="font-bold text-lg">Sukses!</strong>
                <p class="block sm:inline text-base">{{ session('success') }}</p>
            </div>
        </div>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer" onclick="this.parentElement.style.display='none'">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
            </svg>
        </span>
    </div>
@endsession

@session('error')
    <div class="fixed top-4 left-1/2 transform -translate-x-1/2 px-6 py-4 bg-red-100 border border-red-400 text-red-700 rounded-lg shadow-xl z-50 w-3/4 max-w-4xl" role="alert">
        <div class="flex items-center">
            <svg class="w-8 h-8 mr-3 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <div>
                <strong class="font-bold text-lg">Error!</strong>
                <p class="block sm:inline text-base">{{ session('error') }}</p>
            </div>
        </div>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer" onclick="this.parentElement.style.display='none'">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
            </svg>
        </span>
    </div>
@endsession

    <div class="p-6 bg-gray-100 rounded-lg shadow-md">
        
        <form action="{{ route('dash.home.add') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            {{-- Section 1: Hero and Welcome Message --}}
            <div id="section1" class="flex flex-col space-y-4">
            <input 
                type="file" 
                accept="image/*" 
                name="hero_image" 
                id="hero" 
                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border file:border-gray-300 file:text-gray-700 file:bg-gray-100 hover:file:bg-gray-200 shadow-sm"
            >
            @error('hero_image')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror

            <textarea 
                name="welcome_message" 
                placeholder="Masukan deskripsi pesan selamat datang"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                focus:ring-blue-500 resize-none bg-white shadow-sm"
                rows="4"
            ></textarea>
            @error('welcome_message')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
            </div>

            {{-- Foto Kades --}}
            <div id="section3" class="flex flex-col space-y-4">
            <input 
                type="file" 
                accept="image/*" 
                name="kades_image" 
                id="kades_photo" 
                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border file:border-gray-300 file:text-gray-700 file:bg-gray-100 hover:file:bg-gray-200 shadow-sm"
            >
            @error('kades_image')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
            </div>

            {{-- Kalimat Sambutan dari Kades --}}
            <div id="section2" class="flex flex-col space-y-4">
            <textarea 
                name="kades_message" 
                placeholder="Pesan dari kepala desa (Kades)" 
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                focus:ring-blue-500 resize-none bg-white shadow-sm"
                rows="4"
            ></textarea>
            @error('kades_message')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
            </div>

            {{-- Submit Button --}}
            <button  
            type="submit" 
            class="w-full px-4 py-3 text-white bg-[#071952] rounded-lg hover:bg-[#071952bb] cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 shadow-md">
            Submit
            </button>
        </form>
        
        <div class="mt-5 flex p-5 justify-between bg-white shadow-lg rounded-lg">
            <p>Sembunyikan section BUMDes</p>
            <form action="{{ route('toggle.bumdes') }}" method="POST" id="toggleForm">
                @csrf
                <label class="relative inline-flex items-center cursor-pointer">
                    <input 
                        type="checkbox" 
                        name="is_hidden" 
                        value="1" 
                        {{ $isHidden ? 'checked' : '' }}
                        class="sr-only peer" 
                        onclick="this.form.submit()"
                    >
                    <div class="w-11 h-6 bg-gray-300 peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-5 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                </label>
            </form>
        </div>



        <div id="ads_section" class="flex flex-col gap-5 justify-center mt-5 bg-white shadow-lg rounded-lg p-5">
            <div class="p-5 flex justify-between items-center">
            <h1 class="text-xl font-bold text-[#071952]">Atur Papan Iklan</h1>
            {{-- button tambah iklan --}}
            <form action="{{ route('ads.add') }}" method="POST" class="inline">
                @csrf
                <button 
                    type="submit" 
                    class="px-4 py-2 text-white bg-[#071952] rounded-lg hover:bg-[#071952bb] focus:outline-none focus:ring-2 focus:ring-[#07195266] cursor-pointer">
                    Tambah Iklan
                </button>
            </form>
            </div>
                <div id="ads_container" class="space-y-6">
                    <p class="text-sm text-gray-600">Pastikan klik simpan setelah mengisi formulir iklan agar data tidak hilang saat halaman dimuat ulang.</p>

                    @foreach ($adses as $ads)

                    <div class="ad_item border border-gray-300 rounded-lg">
                        <div class="ad_header flex justify-between items-center p-4 bg-gray-100 cursor-pointer" onclick="toggleAdDetails(this)">
                            <h2 class="text-lg font-semibold text-gray-700">
                                {{ $ads->title ?? 'iklan - '.$loop->iteration }}
                            </h2>
                            <span class="toggle-icon">+</span>
                        </div>
                        <div class="ad_details hidden flex-col gap-4 p-4">
                            <form id="myform" method="POST" action="{{ route('ads.update',$ads->id) }}" class="flex flex-col gap-2">
                                @method('PUT')
                                @csrf
                                <div class="flex flex-col gap-2">
                                    <label for="ads[0][title]" class="text-sm text-gray-600">
                                        Masukkan judul iklan
                                    </label>
                                    <input 
                                        type="text" 
                                        name="title",
                                        value="{{ $ads->title }}" 
                                        placeholder="Masukkan judul iklan" 
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm"
                                    >
                                </div>
                                <input 
                                    type="file" 
                                    name="image",
                                    value="{{ $ads->image }}" 
                                    accept="image/*" 
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border file:border-gray-300 file:text-gray-700 file:bg-gray-100 hover:file:bg-gray-200 shadow-sm"
                                >
                                <textarea 
                                    name="description" 
                                    placeholder="Masukkan deskripsi iklan" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                                    focus:ring-blue-500 bg-white shadow-sm resize-none"
                                    rows="4"
                                >{{ $ads->description }}</textarea>
                                <textarea 
                                    name="sub_description" 
                                    placeholder="Masukkan sub deskripsi iklan" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                                    focus:ring-blue-500 bg-white shadow-sm resize-none"
                                    rows="3"
                                >{{ $ads->sub_description }}</textarea>
                                <div class="flex flex-col gap-2">
                                    <label for="ads[0][link]" class="text-sm text-gray-600">Masukkan link (bisa berupa link WhatsApp, sosial media, email, dll.)</label>
                                    <input 
                                        type="url" 
                                        name="link" 
                                        placeholder="Masukkan link" 
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm">
                                </div>
                                <div id="points_container_{{ $ads->id }}" class="space-y-2 my-2">
                                    {{-- point item --}}
                                    @foreach ($ads->PointAds as $PointAds)
                                        <div class="point_item flex items-center gap-4">
                                                <input 
                                                    type="text" 
                                                    name="{{ $PointAds->id}}" 
                                                    value="{{ $PointAds->point }}"
                                                    placeholder="Masukkan poin penting" 
                                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm"
                                                >
                                                {{-- delete point item --}}
                                                <button 
                                                    type="button" 
                                                    id="{{ $PointAds->id }}"
                                                    class="px-3 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400"
                                                    onclick="removePoint(this)">
                                                    Hapus
                                                </button>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="flex flex-wrap justify-end gap-4 mt-4">
                                    {{-- button add point --}}
                                    <button  
                                        type="button" 
                                        onclick="addPoint({{ $ads->id }})" 
                                        class="px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 lg:w-auto w-full text-center">
                                        Tambah Poin
                                    </button>
                                    {{-- save ads --}}
                                    <button 
                                        type="submit" 
                                        class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 lg:w-auto w-full">
                                        Simpan Iklan
                                    </button>
                                </div>

                            </form>

                            <hr class="w-full border-t border-gray-300 my-4">
                            <div class="flex flex-row gap-4 flex-wrap">

                                {{-- delete ads --}}
                                <form action="{{ route('ads.delete', $ads->id) }}" method="POST" class="inline w-full">
                                    @csrf
                                    @method('DELETE')
                                    <button 
                                        type="submit" 
                                        class="w-full px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">
                                        Hapus Iklan
                                    </button>
                                </form>

                                {{-- publish ads --}}
                                <form action="{{ route('ads.publish', $ads->id) }}" method="POST" class="inline w-full">
                                    @csrf
                                    @method('PUT')
                                    <button 
                                        type="submit" 
                                        class="w-full px-4 py-2 text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                                        {{ $ads->is_publish ? 'Arsipkan' : 'Publikasi' }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            
        </div>

       <script src="{{ asset('js/ads.js') }}"></script>
    </div>
@endsection