<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struktur</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/5.0.0/css/jquery.orgchart.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/5.0.0/js/jquery.orgchart.min.js"></script>
    <style>
        #chart-container {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .orgchart .node img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    @include('header.header')

    <main class="mt-30 md:mt-45 flex flex-col gap-10">
        @yield('main')
    </main>
    
    @yield('footer')
    
    @stack('script')
</body>
</html>