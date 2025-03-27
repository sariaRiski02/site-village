<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Penduduk Desa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center">
    <div class="container px-2 border flex justify-center items-center flex-col w-full py-8">
        <!-- Form Tambah Data -->
        <div class="w-full bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-6 text-center text-[#071952]">
            Tambah Data Penduduk Desa
            </h1>

            <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                <label class="block font-semibold mb-2 text-[#071952]" for="name">
                    Nama Lengkap
                </label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Masukkan nama lengkap"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952]"
                >
                </div>

                <div>
                <label class="block font-semibold mb-2 text-[#071952]" for="hamlet">
                    Pilih Dusun
                </label>
                <select 
                    id="hamlet" 
                    name="hamlet"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952]"
                >
                    <option value="">Pilih Dusun</option>
                    <option value="dusun1">Dusun 1</option>
                    <option value="dusun2">Dusun 2</option>
                    <option value="dusun3">Dusun 3</option>
                </select>
                </div>

                <div>
                <label class="block font-semibold mb-2 text-[#071952]" for="family_card">
                    Nomor Kartu Keluarga
                </label>
                <input 
                    type="text" 
                    id="family_card" 
                    name="family_card" 
                    placeholder="Masukkan nomor kartu keluarga"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952]"
                >
                </div>

                <div>
                <label class="block font-semibold mb-2 text-[#071952]" for="nik">
                    NIK (Nomor Induk Kependudukan)
                </label>
                <input 
                    type="text" 
                    id="nik" 
                    name="nik" 
                    placeholder="Masukkan NIK"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952]"
                >
                </div>

                <div>
                <label class="block font-semibold mb-2 text-[#071952]" for="age">
                    Umur
                </label>
                <input 
                    type="number" 
                    id="age" 
                    name="age" 
                    placeholder="Masukkan umur"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952]"
                >
                </div>

                <div>
                <label class="block font-semibold mb-2 text-[#071952]" for="head_of_family">
                    Status Kepala Rumah Tangga
                </label>
                <select 
                    id="head_of_family" 
                    name="head_of_family"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952]"
                >
                    <option value="">Pilih Status</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
                </div>

                <div class="md:col-span-2">
                <label class="block font-semibold mb-2 text-[#071952]" for="income">
                    Penghasilan (per bulan)
                </label>
                <input 
                    type="number" 
                    id="income" 
                    name="income" 
                    placeholder="Masukkan penghasilan"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952]"
                >
                </div>
            </div>

            <div class="flex justify-between space-x-4">
                <button 
                type="submit" 
                class="w-full bg-[#071952] text-white py-3 rounded-lg hover:opacity-90 transition duration-300"
                >
                Tambah Penduduk
                </button>
                <button 
                type="reset" 
                class="w-full bg-gray-500 text-white py-3 rounded-lg hover:opacity-90 transition duration-300"
                >
                Reset
                </button>
            </div>
            </form>
        </div>

        <!-- Form Upload Excel -->
        <div class="w-full bg-white shadow-md rounded-lg p-6 mt-8">
            <h1 class="text-2xl font-bold mb-6 text-center" style="color: #071952;">
            Upload Data Penduduk (Excel)
            </h1>

            <form action="/upload-excel" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block font-bold mb-2" for="excel_file" style="color: #071952;">
                Pilih File Excel
                </label>
                <input 
                type="file" 
                id="excel_file" 
                name="excel_file" 
                accept=".xlsx, .xls"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#071952]"
                >
            </div>

            <div class="flex justify-center">
                <button 
                type="submit" 
                class="text-white py-2 px-6 rounded-md hover:opacity-90 transition duration-300"
                style="background-color: #071952;"
                >
                Upload File
                </button>
            </div>
            </form>

            <div class="mt-6">
            <h2 class="text-lg font-semibold mb-2" style="color: #071952;">Format Excel:</h2>
            <p class="text-sm text-gray-600">Pastikan file Excel memiliki format seperti berikut:</p>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse mt-4">
                    <thead>
                    <tr style="background-color: #071952; color: white;">
                        <th class="border p-2">Nama</th>
                        <th class="border p-2">Dusun</th>
                        <th class="border p-2">Nomor Kartu Keluarga</th>
                        <th class="border p-2">NIK</th>
                        <th class="border p-2">Umur</th>
                        <th class="border p-2">Status Dalam Rumah Tangga</th>
                        <th class="border p-2">Penghasilan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border p-2">Budi Santoso</td>
                        <td class="border p-2">Dusun 1</td>
                        <td class="border p-2">123456789</td>
                        <td class="border p-2">987654321</td>
                        <td class="border p-2">35</td>
                        <td class="border p-2">kepala rumah tangga</td>
                        <td class="border p-2">5000000</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>

        <!-- Daftar Penduduk -->
        <div class="w-full mt-8 bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-bold mb-4" style="color: #071952;">
            Daftar Penduduk
            </h2>

            <!-- Search Form -->
            <form method="GET" action="" class="mb-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                <input 
                    type="text" 
                    name="search_name" 
                    placeholder="Cari berdasarkan nama"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952]"
                >
                </div>
                <div>
                <input 
                    type="text" 
                    name="search_nik_kk" 
                    placeholder="Cari berdasarkan NIK atau KK"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952]"
                >
                </div>
                <div>
                <select 
                    name="search_hamlet" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952]"
                >
                    <option value="">Cari berdasarkan dusun</option>
                    <option value="dusun1">Dusun 1</option>
                    <option value="dusun2">Dusun 2</option>
                    <option value="dusun3">Dusun 3</option>
                </select>
                </div>
            </div>
            <div class="flex justify-end mt-4">
                <button 
                type="submit" 
                class="bg-[#071952] text-white px-6 py-2 rounded-lg hover:opacity-90 transition duration-300"
                >
                Cari
                </button>
            </div>
            </form>

            <!-- Table -->
            <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                <tr style="background-color: #071952; color: white;">
                    <th class="border p-2">No</th>
                    <th class="border p-2">Nama</th>
                    <th class="border p-2">Dusun</th>
                    <th class="border p-2">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="border p-2 text-center">1</td>
                    <td class="border p-2">Budi Santoso</td>
                    <td class="border p-2 text-center">Dusun 1</td>
                    <td class="border p-2 text-center">
                    <div class="flex justify-center space-x-2">
                        <button class="px-2 py-1 rounded text-sm text-white" style="background-color: #071952;">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded text-sm">Hapus</button>
                        <button class="bg-blue-500 text-white px-2 py-1 rounded text-sm">Lihat</button>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td class="border p-2 text-center">2</td>
                    <td class="border p-2">Sri Rahayu</td>
                    <td class="border p-2 text-center">Dusun 2</td>
                    <td class="border p-2 text-center">
                    <div class="flex justify-center space-x-2">
                        <button class="px-2 py-1 rounded text-sm text-white" style="background-color: #071952;">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded text-sm">Hapus</button>
                        <button class="bg-blue-500 text-white px-2 py-1 rounded text-sm">Lihat</button>
                    </div>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>