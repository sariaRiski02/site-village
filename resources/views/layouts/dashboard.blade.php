<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
<body class="h-200">

    <div id="wrapper" class="font-sans px-1 duration-300 overflow-x-hidden">

        @include('header.dashboard-header')
        
        <main class="mt-24 md:mt-24 pt-4 w-full">
            @yield('main')
        </main>
    </div>

    @stack('script')

    <script src="{{ asset('js/dashboard-sidebar.js') }}"></script>

</body>

</html>