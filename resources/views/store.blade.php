@extends('app.app')

@section('main')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white shadow-2xl rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="{{ asset('images/hero.png') }}" alt="Card Image">
            <div class="p-4">
                <h3 class="text-lg font-semibold">Ikan deho</h3>
                <p class="text-gray-600 mt-2">This is a description of the card content. It provides a brief overview of the content inside.</p>
                <a href="#" class="text-blue-500 hover:underline mt-4 inline-block">Read More</a>
            </div>
        </div>
        <div class="bg-white shadow-2xl rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="{{ asset('images/hero.png') }}" alt="Card Image">
            <div class="p-4">
                <h3 class="text-lg font-semibold">ikan malalugis</h3>
                <p class="text-gray-600 mt-2">This is a description of the card content. It provides a brief overview of the content inside.</p>
                <a href="#" class="text-blue-500 hover:underline mt-4 inline-block">Hubungi</a>
            </div>
        </div>
        <div class="bg-white shadow-2xl rounded-lg overflow-hidden">
            <img class="w-full h-48 object-cover" src="{{ asset('images/hero.png') }}" alt="Card Image">
            <div class="p-4">
                <h3 class="text-lg font-semibold">ikan tude</h3>
                <p class="text-gray-600 mt-2">This is a description of the card content. It provides a brief overview of the content inside.</p>
                <a href="#" class="text-blue-500 hover:underline mt-4 inline-block">hubungi</a>
            </div>
        </div>
    </div>
@endsection