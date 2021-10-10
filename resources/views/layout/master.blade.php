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
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="antialiased">
@include('includes.header')
@yield('wrapper')
<!-- Default Statcounter code for Agorama
https://www.agorama.co.uk -->
<script type="text/javascript">
    var sc_project = 12651202;
    var sc_invisible = 1;
    var sc_security = "2c7e9dd8";
</script>
<script type="text/javascript"
        src="https://www.statcounter.com/counter/counter.js"
        async></script>
<noscript>
    <div class="statcounter"><a title="Web Analytics"
                                href="https://statcounter.com/" target="_blank"><img
                class="statcounter"
                src="https://c.statcounter.com/12651202/0/2c7e9dd8/1/"
                alt="Web Analytics"
                referrerPolicy="no-referrer-when-downgrade"></a></div>
</noscript>
<!-- End of Statcounter Code -->
</body>
</html>
