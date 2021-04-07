<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Agorama - Mediterranean Kitchen - Kensal Rise, London</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
<div class="flex items-center min-h-screen bg-gradient-to-bl from-blue-400 to-green-300 bg-cover bg-center overflow-hidden"
     style="background-image: url('{{ asset('images/bg-landing.jpg') }}')">
    <div class="w-full bg-black bg-opacity-70 p-16 flex flex-col text-white">
        <h1 class="text-4xl lg:text-6xl xl:text-8xl font-normal text-center tracking-wide">Agorama</h1>
        <h3 class="text-2xl lg:text-3xl xl:text-4xl text-center mt-4 font-light italic">Mediterranean Kitchen</h3>

        <hr class="my-8">

        <h3 class="text-2xl lg:text-3xl xl:text-4xl text-center mt-4 font-normal tracking-widest">Opening Soon</h3>
        <h3 class="text-base xl:text-2xl text-center mt-8 font-light tracking-wide uppercase">London</h3>

    </div>
</div>
</body>
</html>
