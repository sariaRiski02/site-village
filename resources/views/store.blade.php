@extends('app.app')

@section('main')
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 md:gap-3 gap-1">
        @for ($i = 0; $i < 20; $i++)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden transform scale-100 transition-transform duration-300">
            <img src="https://ketik.co.id/assets/upload/20231115211109perbedaan-ikan-tongkol-dan-cakal0.webp" alt="Pabrik A" class="w-full h-48 object-cover">
            <div class="p-4 text-sm sm:text-base">
                <h3 class="text-lg sm:text-xl font-bold text-gray-800">Pabrik A</h3>
                <p class="text-gray-600 mt-2">Harga Ikan Perkilo:</p>
                <ul class="">
                    <li class="text-gray-700">Ikan Tuna: Rp 50,000</li>
                    <li class="text-gray-700">Ikan Cakalang: Rp 45,000</li>
                    <li class="text-gray-700">Ikan Teri: Rp 30,000</li>
                </ul>
                <a href="#" class="bg-[#071952] text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded hover:bg-[#07195293] mt-4 inline-block text-center text-sm sm:text-base">Jual disini</a>
            </div>
        </div>
        @endfor
    </div>
    <style>
        @media (max-width: 640px) {
            .grid > div {
                transform: scale(0.9);
            }
        }
    </style>
@endsection