@extends('layouts.dashboard')

@section('main')

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
                <textarea 
                    name="welcome_message" 
                    placeholder="Masukan deskripsi pesan selamat datang"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                    focus:ring-blue-500 resize-none bg-white shadow-sm"
                    rows="4"
                ></textarea>
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


        {{-- form papan iklan --}}

        <div id="ads_section" class="flex flex-col gap-5 justify-center mt-5 bg-white shadow-lg rounded-lg p-5">
            <div class="p-5 flex justify-between items-center">
            <h1 class="text-xl font-bold text-[#071952]">Atur Papan Iklan</h1>
            <button 
                type="button" 
                class="px-4 py-2 text-white bg-[#071952] rounded-lg hover:bg-[#071952bb] focus:outline-none focus:ring-2 focus:ring-[#07195266] cursor-pointer"
                onclick="addAd()">
                Tambah Iklan
            </button>
            </div>

            <div id="ads_container" class="space-y-6">
            <div class="ad_item border border-gray-300 rounded-lg">
                <div class="ad_header flex justify-between items-center p-4 bg-gray-100 cursor-pointer" onclick="toggleAdDetails(this)">
                <h2 class="text-lg font-semibold text-gray-700">Iklan 1</h2>
                <span class="toggle-icon">+</span>
                </div>
                <div class="ad_details hidden flex-col gap-4 p-4">
                <input 
                    type="file" 
                    name="ads[0][image]" 
                    accept="image/*" 
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border file:border-gray-300 file:text-gray-700 file:bg-gray-100 hover:file:bg-gray-200 shadow-sm"
                >
                <textarea 
                    name="ads[0][description]" 
                    placeholder="Masukkan deskripsi iklan" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                    focus:ring-blue-500 bg-white shadow-sm resize-none"
                    rows="4"
                ></textarea>
                <textarea 
                    name="ads[0][sub_description]" 
                    placeholder="Masukkan sub deskripsi iklan" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                    focus:ring-blue-500 bg-white shadow-sm resize-none"
                    rows="3"
                ></textarea>
                <div id="points_container_0" class="space-y-2">
                    <div class="point_item flex items-center gap-4">
                    <input 
                        type="text" 
                        name="ads[0][points][]" 
                        placeholder="Masukkan poin penting" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm"
                    >
                    <button 
                        type="button" 
                        class="px-3 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400"
                        onclick="removePoint(this)">
                        Hapus
                    </button>
                    </div>
                </div>
                    <div class="flex flex-wrap justify-end gap-4 mt-4">
                        <button 
                            type="button" 
                            class="px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400"
                            onclick="addPoint(0)">
                            Tambah Poin
                        </button>
                        <button 
                            type="button" 
                            class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400"
                            onclick="saveAd(this)">
                            Simpan Iklan
                        </button>
                        <button 
                            type="button" 
                            class="px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400"
                            onclick="removeAd(this)">
                            Hapus Iklan
                        </button>
                    </div>
                </div>
            </div>
            </div>
        </div>

       <script src="{{ asset('js/ads.js') }}"></script>
    </div>
@endsection