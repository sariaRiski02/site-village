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

<div class="container mx-auto px-4 py-6">
    <div class="mb-6 bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4 text-[#071952]">Edit Sambutan</h2>
        <form id="message-content-form" method="post" class="space-y-4" action="{{ route('dash.gov.set.welcome') }}">
            @csrf
            <div>
                <label for="message-title" class="block text-sm font-medium text-gray-700 mb-2">Judul Sambutan</label>
                <input 
                    type="text" 
                    id="message-title" 
                    value="{{ $data->welcome_message }}"
                    name="welcome_message"
                    placeholder="Masukkan judul sambutan" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                    focus:outline-none focus:ring-2 focus:ring-[#071952]"
                    required
                >
            </div>
            <div>
                <label for="message-body" class="block text-sm font-medium text-gray-700 mb-2">Isi Konten Sambutan</label>
                <textarea 
                    id="message-body" 
                    name="description" 
                    placeholder="Masukkan isi konten sambutan" 
                    rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                    focus:outline-none focus:ring-2 focus:ring-[#071952]"
                    required
                >{{ $data->description }}</textarea>
            </div>
            <div class="flex justify-end space-x-4">
               
                <button 
                    type="submit" 
                    id="update-message-btn"
                    class="px-4 py-2 bg-[#071952] text-white rounded-lg 
                    hover:bg-[#2a3352] focus:outline-none focus:ring-2 
                    focus:ring-[#071952] focus:ring-offset-2"
                >
                    Perbarui Sambutan
                </button>
            </div>
        </form>
    </div>

    <div class="mb-6 bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4 text-[#071952]">Edit Sejarah</h2>
        <form id="history-form" method="post" class="space-y-4" action="">
            @csrf
            <div>
                <label for="history-title" class="block text-sm font-medium text-gray-700 mb-2">Judul Sejarah</label>
                <input 
                    type="text" 
                    id="history-title" 
                    value="{{ $data->title_history }}"
                    name="history_title" 
                    placeholder="Masukkan judul sejarah" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                    focus:outline-none focus:ring-2 focus:ring-[#071952]"
                    required
                >
            </div>
            <div>
                <label for="history-body" class="block text-sm font-medium text-gray-700 mb-2">Isi Sejarah</label>
                <textarea 
                    id="history-body" 
                    name="history_body" 
                    placeholder="Masukkan isi sejarah" 
                    rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                    focus:outline-none focus:ring-2 focus:ring-[#071952]"
                    required
                >{{ $data->history }}</textarea>
            </div>
            <div class="flex justify-end space-x-4">
                
                <button 
                    type="submit" 
                    id="update-history-btn"
                    class="px-4 py-2 bg-[#071952] text-white rounded-lg 
                    hover:bg-[#2a3352] focus:outline-none focus:ring-2 
                    focus:ring-[#071952] focus:ring-offset-2"
                >
                    Perbarui Sejarah
                </button>
            </div>
        </form>
    </div>
    
    <h1 class="text-2xl font-bold mb-6 text-[#071952]">Edit Struktur Pemerintahan</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Form Struktur Organisasi -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4 text-[#071952]">Tambah/Edit Struktur Organisasi</h2>
            <form id="org-chart-node-form" method="post" class="space-y-4" enctype="multipart/form-data" onsubmit="return false;">
                @csrf
                <input type="hidden" id="node-id" name="node_id">
                <div>
                    <label for="node-name" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                    <input 
                        type="text" 
                        id="node-name" 
                        name="name" 
                        placeholder="Masukkan nama" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                        focus:outline-none focus:ring-2 focus:ring-[#071952]"
                        required
                    >
                </div>
                <div>
                    <label for="node-title" class="block text-sm font-medium text-gray-700 mb-2">Jabatan</label>
                    <input 
                        type="text" 
                        id="node-title" 
                        name="title" 
                        placeholder="Masukkan jabatan" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                        focus:outline-none focus:ring-2 focus:ring-[#071952]"
                        required
                    >
                </div>
                <div>
                    <label for="node-parent" class="block text-sm font-medium text-gray-700 mb-2">Induk Node</label>
                    <select 
                        id="node-parent" 
                        name="parent_id" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                        focus:outline-none focus:ring-2 focus:ring-[#071952]"
                    >
                        <option value="">Pilih Induk (Opsional)</option>
                    </select>
                </div>
                <div>
                    <label for="node-image" class="block text-sm font-medium text-gray-700 mb-2">Foto Profil</label>
                    <input 
                        type="file" 
                        id="node-image" 
                        name="image" 
                        accept="image/*"
                        class="block w-full text-sm text-gray-500 
                        file:mr-4 file:py-2 file:px-4 
                        file:rounded-lg file:border-0 
                        file:text-sm file:font-semibold
                        file:bg-[#071952] file:text-white
                        hover:file:bg-[#2a3352]"
                    >
                </div>
                <div class="flex space-x-4">
                    <button 
                        
                        id="add-node-btn"
                        class="flex-1 px-4 py-2 bg-[#071952] text-white rounded-lg 
                        hover:bg-[#2a3352] focus:outline-none focus:ring-2 
                        focus:ring-[#071952] focus:ring-offset-2"
                    >
                        Tambah Node
                    </button>
                    <button 
                        type="button" 
                        id="cancel-edit-btn"
                        class="flex-1 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg 
                        hover:bg-gray-300 focus:outline-none focus:ring-2 
                        focus:ring-gray-400 focus:ring-offset-2 hidden"
                    >
                        Batal
                    </button>
                </div>
            </form>
        </div>

        <!-- Pratinjau Struktur Organisasi -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4 text-[#071952]">Pratinjau Struktur Organisasi</h2>
            <div id="chart-container" class="w-full h-[500px] overflow-auto">
                <!-- Struktur Organisasi akan dirender di sini -->
            </div>
        </div>
    </div>

    <!-- Tombol Simpan dan Atur Ulang -->
    <div class="flex justify-end mt-6 space-x-4">
        <button 
            id="reset-chart-btn"
            class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg 
            hover:bg-gray-300 focus:outline-none focus:ring-2 
            focus:ring-gray-400 focus:ring-offset-2"
        >
            Atur Ulang Struktur
        </button>
        <button 
            id="save-chart-btn"
            class="px-6 py-3 bg-[#071952] text-white rounded-lg 
            hover:bg-[#2a3352] focus:outline-none focus:ring-2 
            focus:ring-[#071952] focus:ring-offset-2"
        >
            Simpan Struktur Organisasi
        </button>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/5.0.0/css/jquery.orgchart.min.css">
@endpush

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/5.0.0/js/jquery.orgchart.min.js"></script>
<script>
   var oc = $('#chartContainerId').orgchart(options);
</script>
@endpush