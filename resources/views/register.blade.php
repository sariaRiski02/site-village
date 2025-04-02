


<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Desa Kema III</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Outfit', sans-serif;
        }
        .bg-pattern {
            background-color: #f3f3f3;
        }
    </style>
</head>
<body class="bg-pattern min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-3xl mx-auto my-10 p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl md:text-3xl font-bold text-[#071952] text-center mb-6">Daftar Akun Admin</h2>
        
        <div class="bg-blue-50 border-l-4 border-[#071952] p-4 mb-6">
            <p class="text-sm text-[#071952]">
                <span class="font-semibold">Perhatian:</span> Halaman ini hanya untuk pendaftaran admin sistem. 
                Silakan masukkan kode registrasi yang telah diberikan oleh administrator utama.
            </p>
        </div>
        
        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf
            
            <!-- Registration Code -->
            <div>
                <label for="registration_code" class="block text-sm font-medium text-[#071952] mb-1">Kode Registrasi Admin <span class="text-red-500">*</span></label>
                <input id="registration_code" type="text" name="registration_code" value="{{ old('registration_code') }}" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent">
                @error('registration_code')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Nama Lengkap -->
                <div class="w-full">
                    <label for="name" class="block text-sm font-medium text-[#071952] mb-1">Nama Lengkap <span class="text-red-500">*</span></label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- NIK -->
                <div class="w-full">
                    <label for="nik" class="block text-sm font-medium text-[#071952] mb-1">NIK <span class="text-red-500">*</span></label>
                    <input id="nik" type="text" name="nik" value="{{ old('nik') }}" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent">
                    @error('nik')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-[#071952] mb-1">Email <span class="text-red-500">*</span></label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Tempat Lahir -->
                <div class="w-full">
                    <label for="birth_place" class="block text-sm font-medium text-[#071952] mb-1">Tempat Lahir <span class="text-red-500">*</span></label>
                    <input id="birth_place" type="text" name="birth_place" value="{{ old('birth_place') }}" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent">
                    @error('birth_place')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Tanggal Lahir -->
                <div class="w-full">
                    <label for="birth_date" class="block text-sm font-medium text-[#071952] mb-1">Tanggal Lahir <span class="text-red-500">*</span></label>
                    <input id="birth_date" type="date" name="birth_date" value="{{ old('birth_date') }}" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent">
                    @error('birth_date')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <!-- Alamat -->
            <div>
                <label for="address" class="block text-sm font-medium text-[#071952] mb-1">Alamat <span class="text-red-500">*</span></label>
                <textarea id="address" name="address" rows="2" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent">{{ old('address') }}</textarea>
                @error('address')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex flex-col md:flex-row gap-4">
                <!-- No. Telepon -->
                <div class="w-full">
                    <label for="phone" class="block text-sm font-medium text-[#071952] mb-1">No. Telepon <span class="text-red-500">*</span></label>
                    <input id="phone" type="tel" name="phone" value="{{ old('phone') }}" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent">
                    @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Jenis Kelamin -->
                <div class="w-full">
                    <label class="block text-sm font-medium text-[#071952] mb-1">Jenis Kelamin <span class="text-red-500">*</span></label>
                    <div class="flex gap-4 mt-2">
                        <div class="flex items-center">
                            <input id="gender-male" type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }} 
                                class="w-4 h-4 text-[#071952] focus:ring-[#071952]">
                            <label for="gender-male" class="ml-2 text-sm text-gray-700">Laki-laki</label>
                        </div>
                        <div class="flex items-center">
                            <input id="gender-female" type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }} 
                                class="w-4 h-4 text-[#071952] focus:ring-[#071952]">
                            <label for="gender-female" class="ml-2 text-sm text-gray-700">Perempuan</label>
                        </div>
                    </div>
                    @error('gender')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <!-- Jabatan Admin -->
            <div>
                <label for="admin_role" class="block text-sm font-medium text-[#071952] mb-1">Jabatan/Posisi <span class="text-red-500">*</span></label>
                <select id="admin_role" name="admin_role" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent">
                    <option value="" disabled {{ old('admin_role') ? '' : 'selected' }}>Pilih Jabatan/Posisi</option>
                    <option value="super_admin" {{ old('admin_role') == 'super_admin' ? 'selected' : '' }}>Admin Utama</option>
                    <option value="content_admin" {{ old('admin_role') == 'content_admin' ? 'selected' : '' }}>Admin Konten</option>
                    <option value="data_admin" {{ old('admin_role') == 'data_admin' ? 'selected' : '' }}>Admin Data</option>
                    <option value="service_admin" {{ old('admin_role') == 'service_admin' ? 'selected' : '' }}>Admin Layanan</option>
                </select>
                @error('admin_role')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Password -->
                <div class="w-full">
                    <label for="password" class="block text-sm font-medium text-[#071952] mb-1">Password <span class="text-red-500">*</span></label>
                    <input id="password" type="password" name="password" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent">
                    <p class="text-xs text-gray-500 mt-1">Minimal 8 karakter dengan kombinasi huruf, angka, dan simbol</p>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Confirm Password -->
                <div class="w-full">
                    <label for="password_confirmation" class="block text-sm font-medium text-[#071952] mb-1">Konfirmasi Password <span class="text-red-500">*</span></label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent">
                </div>
            </div>
            
            <!-- Terms & Conditions -->
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="terms" name="terms" type="checkbox" required 
                        class="w-4 h-4 text-[#071952] border-gray-300 rounded focus:ring-[#071952]">
                </div>
                <div class="ml-3 text-sm">
                    <label for="terms" class="text-gray-700">Saya menyetujui <a href="#" class="text-[#071952] font-semibold hover:underline">Syarat & Ketentuan</a> yang berlaku</label>
                    @error('terms')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="responsibility" name="responsibility" type="checkbox" required 
                        class="w-4 h-4 text-[#071952] border-gray-300 rounded focus:ring-[#071952]">
                </div>
                <div class="ml-3 text-sm">
                    <label for="responsibility" class="text-gray-700">Saya bertanggung jawab penuh atas akses dan tindakan yang dilakukan dengan akun admin ini</label>
                    @error('responsibility')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full bg-[#071952] text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-900 transition">
                    Daftar Sebagai Admin
                </button>
            </div>
            
            <!-- Login Link -->
            <div class="text-center mt-4">
                <p class="text-sm text-gray-700">
                    Sudah memiliki akun? 
                    <a href="{{ route('login') }}" class="text-[#071952] font-semibold hover:underline">Masuk di sini</a>
                </p>
            </div>
        </form>
    <!-- Footer -->
    <footer class="mt-10 text-center text-sm text-gray-500">
        <p>&copy; {{ date('Y') }} Desa Kema III. All rights reserved.</p>
    </footer>
    </div>
    
</body>
</html>