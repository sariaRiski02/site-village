@extends('layouts.app')

@section('main')
    <div class="bg-sky-50 rounded-xl p-6 mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-[#071952] text-center mb-3">Layanan Desa Kema III</h1>
        <p class="text-center text-gray-700 max-w-3xl mx-auto mb-8">Kami menyediakan berbagai layanan untuk memenuhi kebutuhan masyarakat desa. Silakan pilih layanan yang Anda butuhkan di bawah ini.</p>
        
        <div class="grid md:grid-cols-3 gap-6 my-6">
            <!-- Layanan Administrasi -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition group">
                <div class="flex items-center justify-center mb-4">
                    <div class="bg-sky-100 p-4 rounded-full text-[#071952] group-hover:bg-[#071952] group-hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-semibold text-[#071952] text-center">Pelayanan Administrasi</h2>
                <p class="text-gray-600 mt-3 text-center">Pengurusan KTP, KK, Surat Domisili, Surat Keterangan Usaha, dan dokumen administrasi lainnya.</p>
                <div class="mt-6 flex justify-center">
                    <button class="px-6 py-3 bg-[#071952] text-white rounded-lg hover:bg-blue-900 transition flex items-center">
                        <span>Ajukan Sekarang</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Bantuan Sosial -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition group">
                <div class="flex items-center justify-center mb-4">
                    <div class="bg-sky-100 p-4 rounded-full text-[#071952] group-hover:bg-[#071952] group-hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-semibold text-[#071952] text-center">Bantuan Sosial</h2>
                <p class="text-gray-600 mt-3 text-center">Informasi dan pengajuan bantuan sosial, PKH, BPNT, dan program bantuan lainnya bagi masyarakat.</p>
                <div class="mt-6 flex justify-center">
                    <button class="px-6 py-3 bg-[#071952] text-white rounded-lg hover:bg-blue-900 transition flex items-center">
                        <span>Cek Eligibilitas</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Layanan Kesehatan -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition group">
                <div class="flex items-center justify-center mb-4">
                    <div class="bg-sky-100 p-4 rounded-full text-[#071952] group-hover:bg-[#071952] group-hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-semibold text-[#071952] text-center">Layanan Kesehatan</h2>
                <p class="text-gray-600 mt-3 text-center">Akses informasi posyandu, puskesmas, vaksinasi, dan layanan kesehatan lainnya di desa.</p>
                <div class="mt-6 flex justify-center">
                    <button class="px-6 py-3 bg-[#071952] text-white rounded-lg hover:bg-blue-900 transition flex items-center">
                        <span>Jadwalkan Kunjungan</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Layanan Pendidikan -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition group">
                <div class="flex items-center justify-center mb-4">
                    <div class="bg-sky-100 p-4 rounded-full text-[#071952] group-hover:bg-[#071952] group-hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-semibold text-[#071952] text-center">Layanan Pendidikan</h2>
                <p class="text-gray-600 mt-3 text-center">Informasi sekolah, beasiswa, pelatihan keterampilan, dan program pendidikan lainnya.</p>
                <div class="mt-6 flex justify-center">
                    <button class="px-6 py-3 bg-[#071952] text-white rounded-lg hover:bg-blue-900 transition flex items-center">
                        <span>Lihat Program</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Layanan Keamanan -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition group">
                <div class="flex items-center justify-center mb-4">
                    <div class="bg-sky-100 p-4 rounded-full text-[#071952] group-hover:bg-[#071952] group-hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-semibold text-[#071952] text-center">Layanan Keamanan</h2>
                <p class="text-gray-600 mt-3 text-center">Pengaduan dan informasi terkait keamanan lingkungan, Linmas, dan patroli desa.</p>
                <div class="mt-6 flex justify-center">
                    <button class="px-6 py-3 bg-[#071952] text-white rounded-lg hover:bg-blue-900 transition flex items-center">
                        <span>Laporkan Masalah</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Layanan Perikanan -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition group">
                <div class="flex items-center justify-center mb-4">
                    <div class="bg-sky-100 p-4 rounded-full text-[#071952] group-hover:bg-[#071952] group-hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-semibold text-[#071952] text-center">Layanan Perikanan</h2>
                <p class="text-gray-600 mt-3 text-center">Dukungan untuk nelayan, akses pasar, pelatihan, dan bantuan peralatan perikanan.</p>
                <div class="mt-6 flex justify-center">
                    <button class="px-6 py-3 bg-[#071952] text-white rounded-lg hover:bg-blue-900 transition flex items-center">
                        <span>Daftar Program</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Section for direct service access -->
        <div class="mt-12 bg-white p-6 rounded-xl shadow-md">
            <h3 class="text-xl font-bold text-[#071952] mb-4">Layanan Cepat</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#" class="flex items-center p-3 bg-sky-50 rounded-lg hover:bg-sky-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#071952] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="text-[#071952] font-medium">Kontak Darurat</span>
                </a>
                <a href="#" class="flex items-center p-3 bg-sky-50 rounded-lg hover:bg-sky-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#071952] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="text-[#071952] font-medium">Jadwal Kegiatan</span>
                </a>
                <a href="#" class="flex items-center p-3 bg-sky-50 rounded-lg hover:bg-sky-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#071952] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                    <span class="text-[#071952] font-medium">Pengaduan</span>
                </a>
                <a href="#" class="flex items-center p-3 bg-sky-50 rounded-lg hover:bg-sky-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#071952] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-[#071952] font-medium">Bantuan Dana</span>
                </a>
            </div>
        </div>
    </div>
@endsection