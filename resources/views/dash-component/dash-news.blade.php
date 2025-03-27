@extends('layouts.dashboard')

@section('main')
<div class="container mx-auto px-4 pb-4">
    <h1 class="text-3xl font-bold mb-8 text-[#071952]">Manajemen Portal Berita Desa</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Statistik Singkat -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <div class="text-4xl font-bold text-[#071952] mb-2">42</div>
            <div class="text-gray-600">Total Berita</div>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <div class="text-4xl font-bold text-green-600 mb-2">12</div>
            <div class="text-gray-600">Berita Aktif</div>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <div class="text-4xl font-bold text-blue-600 mb-2">5.6K</div>
            <div class="text-gray-600">Total Pembaca</div>
        </div>
    </div>

    <form action="" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf

        <!-- Tambah Berita Baru -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-6 text-[#071952]">Buat Berita Baru</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Judul Berita</label>
                    <input 
                        type="text" 
                        name="title" 
                        required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan judul berita"
                    >
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Kategori</label>
                    <select 
                        name="category" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                        <option value="">Pilih Kategori</option>
                        <option value="pemerintahan">Pemerintahan</option>
                        <option value="pembangunan">Pembangunan</option>
                        <option value="sosial">Sosial Kemasyarakatan</option>
                        <option value="budaya">Budaya</option>
                        <option value="pendidikan">Pendidikan</option>
                    </select>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Konten Berita</label>
                <textarea 
                    id="editor" 
                    name="content" 
                    rows="10"
                    required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Tulis isi berita di sini..."
                ></textarea>

                
                <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace('editor', {
                        toolbar: [
                            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
                            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule'] },
                            { name: 'styles', items: ['Format', 'Font', 'FontSize'] },
                            { name: 'colors', items: ['TextColor', 'BGColor'] },
                            { name: 'tools', items: ['Maximize'] }
                        ],
                        height: 300
                    });
                </script>
                
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Gambar Utama</label>
                    <input 
                        type="file" 
                        name="featured_image"
                        accept="image/*"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Penulis</label>
                    <input 
                        type="text" 
                        name="author"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Nama penulis"
                    >
                </div>
            </div>
        </div>

        <!-- Daftar Berita -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-6 text-[#071952]">Daftar Berita Terkini</h2>
            
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-[#071952] text-white">
                            <th class="p-3 text-left">Judul</th>
                            <th class="p-3 text-left">Kategori</th>
                            <th class="p-3 text-left">Tanggal</th>
                            <th class="p-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $news = [
                                ['title' => 'Pembangunan Infrastruktur Desa', 'category' => 'Pembangunan', 'date' => '2024-03-15'],
                                ['title' => 'Kegiatan Gotong Royong', 'category' => 'Sosial', 'date' => '2024-03-10'],
                                ['title' => 'Pelatihan Keterampilan Warga', 'category' => 'Pendidikan', 'date' => '2024-03-05']
                            ]
                        @endphp
                        @foreach($news as $item)
                            <tr class="border-b">
                                <td class="p-3">{{ $item['title'] }}</td>
                                <td class="p-3">{{ $item['category'] }}</td>
                                <td class="p-3">{{ $item['date'] }}</td>
                                <td class="p-3 text-center">
                                    <div class="flex justify-center space-x-2">
                                        <button type="button" class="text-yellow-500 hover:text-yellow-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.379-8.379-2.828-2.828z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="text-red-500 hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fillRule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clipRule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pengaturan Kategori -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-6 text-[#071952]">Manajemen Kategori</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Tambah Kategori Baru</label>
                    <div class="flex">
                        <input 
                            type="text" 
                            name="new_category"
                            class="flex-grow px-3 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Nama kategori"
                        >
                        <button 
                            type="button" 
                            class="px-4 py-2 bg-[#071952] text-white rounded-r-md hover:bg-blue-900"
                        >
                            Tambah
                        </button>
                    </div>
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Daftar Kategori</label>
                    <div class="border border-gray-300 rounded-md p-3">
                        <ul class="space-y-2">
                            @php
                                $categories = [
                                    'Pemerintahan', 
                                    'Pembangunan', 
                                    'Sosial Kemasyarakatan', 
                                    'Budaya', 
                                    'Pendidikan'
                                ]
                            @endphp
                            @foreach($categories as $category)
                                <li class="flex justify-between items-center">
                                    <span>{{ $category }}</span>
                                    <button type="button" class="text-red-500 hover:text-red-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fillRule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clipRule="evenodd" />
                                        </svg>
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="flex justify-end space-x-4">
            <button 
                type="button" 
                class="px-6 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 transition duration-300"
            >
                Batal
            </button>
            <button 
                type="submit" 
                class="px-6 py-2 bg-[#071952] text-white rounded-md hover:bg-blue-900 transition duration-300"
            >
                Publikasikan Berita
            </button>
        </div>
    </form>
</div>
@endsection