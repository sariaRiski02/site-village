

<div id="ads_section" class="flex flex-col gap-5 justify-center mt-5 bg-white shadow-lg rounded-lg p-5">
    <div class="p-5 flex justify-between items-center">
    <h1 class="text-xl font-bold text-[#071952]">Atur Papan Iklan</h1>
    <form action="{{ route('ads.add') }}" method="POST" class="inline">
        @csrf
        <button 
            type="submit" 
            class="px-4 py-2 text-white bg-[#071952] rounded-lg hover:bg-[#071952bb] focus:outline-none focus:ring-2 focus:ring-[#07195266] cursor-pointer">
            Tambah Iklan
        </button>
    </form>
    </div>

    <form action="" method="POST" enctype="multipart/form-data" id="ads_form">
        @csrf
        <div id="ads_container" class="space-y-6">
            <p class="text-sm text-gray-600">Pastikan klik simpan setelah mengisi formulir iklan agar data tidak hilang saat halaman dimuat ulang.</p>


            {{-- list containerT --}}

            <!-- 
            <div class="ad_item border border-gray-300 rounded-lg" id="boxAds_[id]">
                <div class="ad_header flex justify-between items-center p-4 bg-gray-100 cursor-pointer" onclick="toggleAdDetails(this)">
                    <h2 id="title_ads" class="text-lg font-semibold text-gray-700">
                        Tugas 1
                    </h2>
                    <span class="toggle-icon">+</span>
                </div>
                <div class="ad_details hidden flex-col gap-4 p-4">
                    <form id="myform" method="POST">
                        <div class="flex flex-col gap-2">
                            <label for="ads[0][title]" class="text-sm text-gray-600">
                                Masukkan judul iklan
                            </label>
                            <input 
                                type="text" 
                                name="ads[0][title]"
                                id="input_title_ads" 
                                placeholder="Masukkan judul iklan" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm"
                            >
                        </div>
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
                            id="description_title_ads"
                        ></textarea>
                        <textarea 
                            name="ads[0][sub_description]" 
                            placeholder="Masukkan sub deskripsi iklan" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 
                            focus:ring-blue-500 bg-white shadow-sm resize-none"
                            rows="3"
                            id="description_title_ads"
                        ></textarea>
                        <div class="flex flex-col gap-2">
                            <label for="ads[0][link]" class="text-sm text-gray-600">Masukkan link (bisa berupa link WhatsApp, sosial media, email, dll.)</label>
                            <input 
                                type="url" 
                                name="ads[0][link]" 
                                placeholder="Masukkan link" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm"
                            >
                        </div>
                        <div id="points_container_0" class="space-y-2 my-2">
                            {{-- point item --}}
                                <div class="point_item flex items-center gap-4">
                                        <input 
                                            type="text" 
                                            name="" 
                                            value=""
                                            placeholder="Masukkan poin penting" 
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm"
                                        >
                                        {{-- delete point item --}}
                                        <button 
                                            type="button" 
                                            class="px-3 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400"
                                            onclick="removePoint(this)">
                                            Hapus
                                        </button>
                                </div>
                        </div>
                        <div class="flex flex-wrap justify-end gap-4 mt-4">
                            {{-- button add point --}}
                            <a href=""
                                class="px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                                Tambah Poin
                            </a>
                            {{-- save ads --}}
                            <button 
                                type="submit" 
                                class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                Simpan Iklan
                            </button>
                        </div>

                    </form>

                    <hr class="w-full border-t border-gray-300 my-4">
                    
                    <div class="flex flex-row gap-4 flex-wrap">

                        {{-- delete ads --}}
                        <form action="" method="POST" class="inline w-full">
                            @csrf
                            @method('DELETE')
                            <button 
                                type="submit" 
                                class="w-full px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">
                                Hapus Iklan
                            </button>
                        </form>

                        {{-- publish ads --}}
                        <form action="" method="POST" class="inline w-full">
                            @csrf
                            @method('PUT')
                            <button 
                                type="submit" 
                                class="w-full px-4 py-2 text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                                Publikasikan Iklan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            -->
            
        </div>
    </form>
</div>

