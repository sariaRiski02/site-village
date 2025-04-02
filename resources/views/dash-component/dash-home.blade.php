@extends('layouts.dashboard')

@section('main')

    <div class="p-6 bg-gray-100 rounded-lg shadow-md">
        {{-- Section 1: Hero and Welcome Message --}}
        <form action="" class="space-y-6">
            <div id="section1" class="flex flex-col space-y-4">
                <input 
                    type="text" 
                    name="welcome_message" 
                    placeholder="Masukan pesan selamat datang" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2
                    focus:ring-blue-500 bg-white shadow-sm"
                >
                <input 
                    type="file" 
                    accept="image/*" 
                    name="hero" 
                    id="hero" 
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border file:border-gray-300 file:text-gray-700 file:bg-gray-100 hover:file:bg-gray-200 shadow-sm"
                >
                <textarea 
                    name="description_message" 
                    placeholder="Masukan deskripsi pesan selamat datang"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                    focus:ring-blue-500 resize-none bg-white shadow-sm"
                    rows="4"
                ></textarea>
            </div>
            <button 
                type="submit" 
                class="w-full px-4 py-3 text-white bg-[#071952] rounded-lg hover:bg-[#071952bb] cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 shadow-md"
            >
                Submit
            </button>
        </form>

        {{-- kalimat sambutan dari kades --}}
        <form action="" class="space-y-6 mt-6">
            <div id="section2" class="flex flex-col space-y-4">
                <textarea 
                    name="kades_message" 
                    placeholder="Pesan dari kepala desa (Kades)" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                    focus:ring-blue-500 resize-none bg-white shadow-sm"
                    rows="4"
                ></textarea>
            </div>
            <button 
                type="submit" 
                class="w-full px-4 py-3 text-white bg-[#071952] rounded-lg hover:bg-[#071952bb] cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 shadow-md"
            >
                Submit
            </button>
        </form>
    </div>
@endsection