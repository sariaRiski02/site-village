@extends('layouts.dashboard')

@section('main')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8 text-[#071952]">Edit Informasi Geografis Desa Kema 3</h1>

    <form action="" method="POST" class="space-y-8">
        @csrf
        @method('PUT')

        <!-- Informasi Dasar Desa -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-6 text-[#071952]">Informasi Dasar Desa</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Nama Desa</label>
                    <input 
                        type="text" 
                        name="village_name" 
                        value="Desa Kema 3" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Kecamatan</label>
                    <input 
                        type="text" 
                        name="district" 
                        value="Kecamatan Makmur" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Kabupaten</label>
                    <input 
                        type="text" 
                        name="regency" 
                        value="Kabupaten Bahagia" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Luas Wilayah (Ha)</label>
                    <input 
                        type="number" 
                        name="total_area" 
                        value="90" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
            </div>
        </div>

        <!-- Batas Wilayah -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-6 text-[#071952]">Batas Wilayah</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Batas Utara</label>
                    <input 
                        type="text" 
                        name="north_boundary" 
                        value="Desa Kema Dua" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Batas Timur</label>
                    <input 
                        type="text" 
                        name="east_boundary" 
                        value="Laut Maluku" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Batas Selatan</label>
                    <input 
                        type="text" 
                        name="south_boundary" 
                        value="Desa Lansot" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Batas Barat</label>
                    <input 
                        type="text" 
                        name="west_boundary" 
                        value="Desa Kema Dua" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
            </div>
        </div>

        <!-- Penggunaan Lahan -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-6 text-[#071952]">Penggunaan Lahan</h2>
            <div class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <label class="block text-gray-700 font-bold">Kategori Lahan</label>
                <label class="block text-gray-700 font-bold text-center">Luas (Ha)</label>
            </div>
            @php
                $landTypes = [
                ['name' => 'Pemukiman', 'area' => 30],
                ['name' => 'Lahan Tidur', 'area' => 20],
                ['name' => 'Tambak/Rawa', 'area' => 15],
                ['name' => 'Lahan Kritis', 'area' => 5],
                ['name' => 'Lahan Hutan', 'area' => 5],
                ['name' => 'Ladang Palawija', 'area' => 5],
                ['name' => 'Perkebunan Tanaman Keras', 'area' => 5]
                ]
            @endphp
            @foreach($landTypes as $land)
                <div class="grid grid-cols-2 gap-4 items-center">
                <input 
                    type="text" 
                    name="land_types[{{ $loop->index }}][name]" 
                    value="{{ $land['name'] }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                <input 
                    type="number" 
                    name="land_types[{{ $loop->index }}][area]" 
                    value="{{ $land['area'] }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-center"
                >
                </div>
            @endforeach
            </div>
        </div>

        <!-- Galeri Foto -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-6 text-[#071952]">Galeri Foto</h2>

            <!-- Form Upload Foto -->
            <form action="" method="POST" enctype="multipart/form-data" class="mb-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div>
                <label class="block text-gray-700 font-bold mb-2">Unggah Foto</label>
                <input 
                    type="file" 
                    name="photo" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                </div>
                <div>
                <label class="block text-gray-700 font-bold mb-2">Judul Foto</label>
                <input 
                    type="text" 
                    name="title" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 font-bold mb-2">Deskripsi Foto</label>
                <textarea 
                name="description" 
                rows="3" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                ></textarea>
            </div>
            <div class="mt-4 flex justify-end">
                <button 
                type="submit" 
                class="px-6 py-2 bg-[#071952] text-white rounded-md hover:bg-blue-900 transition duration-300"
                >
                Unggah Foto
                </button>
            </div>
            </form>

            <!-- Tabel Foto yang Telah Diunggah -->
            <div class="overflow-x-auto my-5">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="px-6 py-3 border-b text-gray-700 font-bold">#</th>
                    <th class="px-6 py-3 border-b text-gray-700 font-bold">Foto</th>
                    <th class="px-6 py-3 border-b text-gray-700 font-bold">Judul</th>
                    <th class="px-6 py-3 border-b text-gray-700 font-bold">Deskripsi</th>
                    <th class="px-6 py-3 border-b text-gray-700 font-bold">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-6 py-4 border-b">1</td>
                        <td class="px-6 py-4 border-b">
                            <img 
                            src="{{ asset('storage/photos/photo1.jpg') }}" 
                            alt="Pemandangan Desa" 
                            class="w-16 h-16 object-cover rounded-md"
                            >
                        </td>
                        <td class="px-6 py-4 border-b">Pemandangan Desa</td>
                        <td class="px-6 py-4 border-b">Pemandangan indah di Desa Kema 3</td>
                        <td class="px-6 py-4 border-b">
                            <form action="" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto ini?');">
                            @csrf
                            @method('DELETE')
                            <button 
                                type="submit" 
                                class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition duration-300"
                            >
                                Hapus
                            </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 border-b">2</td>
                        <td class="px-6 py-4 border-b">
                            <img 
                            src="{{ asset('storage/photos/photo2.jpg') }}" 
                            alt="Kegiatan Warga" 
                            class="w-16 h-16 object-cover rounded-md"
                            >
                        </td>
                        <td class="px-6 py-4 border-b">Kegiatan Warga</td>
                        <td class="px-6 py-4 border-b">Kegiatan gotong royong warga desa</td>
                        <td class="px-6 py-4 border-b">
                            <form action="" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto ini?');">
                            @csrf
                            @method('DELETE')
                            <button 
                                type="submit" 
                                class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition duration-300"
                            >
                                Hapus
                            </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 border-b">3</td>
                        <td class="px-6 py-4 border-b">
                            <img 
                            src="{{ asset('storage/photos/photo3.jpg') }}" 
                            alt="Hasil Pertanian" 
                            class="w-16 h-16 object-cover rounded-md"
                            >
                        </td>
                        <td class="px-6 py-4 border-b">Hasil Pertanian</td>
                        <td class="px-6 py-4 border-b">Hasil panen ladang palawija</td>
                        <td class="px-6 py-4 border-b">
                            <form action="" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto ini?');">
                            @csrf
                            @method('DELETE')
                            <button 
                                type="submit" 
                                class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition duration-300"
                            >
                                Hapus
                            </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>

        <!-- Tautan Google Maps -->
        <div class="bg-white shadow-md rounded-lg p-6 my-3">
            <h2 class="text-2xl font-bold mb-6 text-[#071952]">Tautan Google Maps</h2>
            <div>
            <label class="block text-gray-700 font-bold mb-2">URL Embed Google Maps</label>
            <input 
                type="text" 
                name="google_maps_url" 
                value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7724.8384797662075!2d125.07000117909166!3d1.3636523334939143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32871b2cfeaf6e31%3A0x7cf5e841306209ac!2sKema%203!5e1!3m2!1sid!2sid!4v1742446648591!5m2!1sid!2sid" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
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
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection