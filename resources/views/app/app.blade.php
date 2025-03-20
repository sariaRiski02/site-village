<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Outfit', sans-serif;
        }
    </style>
  </head>
  <body class="px-3 md:px-15">
   
    {{-- Header --}}
    @include('header.header')
 
    {{-- main --}}
    <main class="mt-30 md:mt-45 flex flex-col gap-10">
    @yield('main')
    </main>

    @include('footer.footer')
    
    
    <script>

        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const toggleButton = document.getElementById('toggleSidebar');
            
            // Periksa apakah klik terjadi di luar sidebar dan bukan pada tombol toggle
            if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
                // Hanya menutup jika sidebar sedang terbuka
                if (sidebar.classList.contains('translate-x-0')) {
                    sidebar.classList.remove('translate-x-0');
                    sidebar.classList.add('-translate-x-full');
                    document.getElementById('overlay').classList.add('hidden');
                }
            }
        });

        document.getElementById('toggleSidebar').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('translate-x-0');
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
            
            document.getElementById('overlay').classList.remove('hidden');
        });
    </script>
  </body>
</html>