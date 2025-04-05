@extends('layouts.dashboard')

@section('main')

    <div class="p-6 bg-gray-100 rounded-lg shadow-md">
        {{-- Unified Form --}}
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
    </div>
@endsection