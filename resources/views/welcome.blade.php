<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>agorama - Mediterranean Kitchen - Kensal Rise, London</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
<header class="fixed top-0 inset-x-0 bg-gray-900 bg-opacity-95">
    <div class="text-white px-8">
        <nav class="h-16 flex justify-between items-center font-logo">
            <div class="text-4xl font-bold">agorama</div>
            <ul class="flex items-center text-base xl:text-lg tracking-wide space-x-8">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Concept</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Contact</a></li>
                <li class="px-4 py-2 bg-green-600 rounded-lg whitespace-nowrap">Order Now</li>
            </ul>
        </nav>
    </div>
</header>
<div
    class="flex items-center min-h-screen bg-gradient-to-bl from-blue-400 to-green-300 bg-cover bg-center overflow-hidden"
    style="background-image: url('{{ asset('images/bg-landing.jpg') }}')">
    <div class="w-full bg-black bg-opacity-70 p-16 flex flex-col text-white">
        <h1 class="text-4xl lg:text-6xl xl:text-8xl font-logo font-semibold text-center tracking-wide">Agorama</h1>
        <h3 class="text-lg lg:text-2xl xl:text-4xl text-center mt-4 font-light italic">Mediterranean Kitchen</h3>

        <hr class="my-8">

        <h3 class="text-2xl lg:text-3xl xl:text-4xl text-center mt-4 font-logo font-normal tracking-widest">Opening
            Soon</h3>
        <h3 class="text-base xl:text-2xl text-center mt-8 font-light tracking-wide uppercase">London</h3>

    </div>
</div>
</body>
</html>
