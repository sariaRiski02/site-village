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
    <div class="w-full max-w-md">
        <!-- Logo and Header -->
        <div class="text-center mb-6">
           
            <h1 class="text-2xl font-bold text-[#071952]">Login - Desa Kema III</h1>
            <p class="text-gray-600 mt-2">Silakan masuk untuk mengakses sistem</p>
        </div>
        
        <!-- Login Card -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <!-- Session Status -->
            @if (session('status'))
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6">
                    <p class="text-sm text-blue-700">
                        {{ session('status') }}
                    </p>
                </div>
            @endif
            
            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6">
                    <p class="text-sm font-medium text-red-800">
                        Terjadi kesalahan:
                    </p>
                    <ul class="mt-1 text-sm text-red-700 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-[#071952] mb-1">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent transition">
                </div>
                
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-[#071952] mb-1">Password</label>
                    <input id="password" type="password" name="password" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#071952] focus:border-transparent transition">
                </div>
                
                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" 
                            class="w-4 h-4 text-[#071952] border-gray-300 rounded focus:ring-[#071952]">
                        <label for="remember_me" class="ml-2 text-sm text-gray-700">Ingat saya</label>
                    </div>
                    
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-[#071952] hover:underline">
                            Lupa password?
                        </a>
                    @endif
                </div>
                
                <!-- Login Button -->
                <button type="submit" class="w-full bg-[#071952] text-white py-3 px-4 rounded-lg font-medium hover:bg-blue-900 transition flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    Masuk
                </button>
            </form>
            
            <!-- Divider -->
            <div class="relative flex items-center my-6">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="flex-shrink mx-4 text-gray-600 text-sm">atau</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>
            
            <!-- Register Link -->
            <p class="text-center text-gray-700 text-sm">
                Belum memiliki akun? 
                <a href="{{ route('register') }}" class="text-[#071952] font-semibold hover:underline">
                    Daftar sekarang
                </a>
            </p>
        </div>
        
        <!-- Footer -->
        <div class="text-center mt-8 text-sm text-gray-600">
            <p>© {{ date('Y') }} Desa Kema III. Hak Cipta Dilindungi.</p>
            <p class="mt-1">
                <a href="/" class="text-[#071952] hover:underline">Beranda</a> · 
                <a href="/contact" class="text-[#071952] hover:underline">Hubungi Kami</a>
            </p>
        </div> 
    </div>
</body>
</html>