@extends('layouts.dashboard')

@section('main')

    <div class="p-3">
        {{-- section 1 hero end welcome message --}}
        <form action="" class="space-y-6">
            <div id="section1" class="flex flex-col space-y-4">
                <input 
                    type="text" 
                    name="welcome_message" 
                    placeholder="Masukan pesan selamat datang" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2
                    focus:ring-[#071952]"
                >
                <input 
                    type="file" 
                    accept="image/*" 
                    name="hero" 
                    id="hero" 
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border file:border-gray-300 file:text-gray-700 file:bg-gray-100 hover:file:bg-gray-200"
                >
                <textarea 
                    name="description_message" 
                    placeholder="Masukan deskripsi pesan selamat datang"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                    focus:ring-[#071952] resize-none"
                    rows="4"
                ></textarea>
            </div>
            <button 
                type="submit" 
                class="w-full px-4 py-2 text-white bg-[#071952] rounded-lg hover:bg-[#2a3352] focus:outline-none focus:ring-2 focus:ring-[#071952] focus:ring-offset-2 cursor-pointer"
            >
                Submit
            </button>
        </form>


        {{-- advertise and bumdes --}}
        <form action="" class="space-y-6 mt-4">
            <div id="section2" class="flex flex-col space-y-4">
            <textarea 
                name="kades_message" 
                placeholder="Pesan dari kepala desa (Kades)" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                focus:ring-[#071952] resize-none"
                rows="4"
            ></textarea>
            </div>
            <button 
            type="submit" 
            class="w-full px-4 py-2 text-white bg-[#071952] rounded-lg hover:bg-[#2a3352] focus:outline-none focus:ring-2 focus:ring-[#071952] focus:ring-offset-2 cursor-pointer"
            >
            Submit
            </button>
        </form>

        
    </div>
@endsection