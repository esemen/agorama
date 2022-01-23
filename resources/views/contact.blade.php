@extends('layout.master')

@section('wrapper')
    <div class="min-h-screen flex flex-col">
        <div
            class="h-72 pt-16 flex items-center justify-center bg-black bg-cover bg-center bg-blend-overlay bg-opacity-75 overflow-hidden"
            style="background-image: url('{{ asset('images/full-table.jpg') }}')">
            <h1 class="text-4xl text-white font-serif">Contact</h1>
        </div>

        <div class="container max-w-screen-lg flex-grow pb-24 shadow-2xl">
            <div class="grid grid-cols-1 md:grid-cols-3">
                <div class="mt-24 text-center text-xl font-medium text-gray-700">
                    <p class="mb-4"><i class="text-4xl text-green-500 fa fa-map-pin"></i></p>
                    <p>
                        109 Chamberlayne Road<br>
                        Kensal Rise, NW10 3NS<br>
                        LONDON
                    </p>
                    <a class="text-base underline text-gray-700 hover:text-yellow-500" href="https://www.google.com/maps/dir/51.4786258,-0.3425583/agorama,+109+Chamberlayne+Rd,+London+NW10+3NS" target="_blank">Get directions</a></p>
                </div>
                <div class="mt-24 text-center text-xl font-medium text-gray-700">
                    <p class="mb-4"><i class="text-4xl text-green-500 fa fa-phone"></i></p>
                    <a href="tel://02039048179">0203 904 81 79</a>
                </div>
                <div class="mt-24 text-center text-xl font-medium text-gray-700">
                    <p class="mb-4"><i class="text-4xl text-green-500 fa fa-envelope"></i></p>
                    <a href="mailto:info@agorama.co.uk">info@agorama.co.uk</a>
                </div>
            </div>
        </div>


        <div class="h-96" id="map"></div>

        <script type="text/javascript"
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3V7JLFKcw9vJiZvdelWcR2Y4V4azjX-g"></script>


        <script type="text/javascript">
            window.addEventListener('load', (event) => {
                var latlng = new google.maps.LatLng(51.535019, -0.219600);

                var map = new google.maps.Map(document.getElementById('map'), {
                    center: latlng,
                    scrollwheel: false,
                    zoom: 15,
                    zoomControl: true,
                    zoomControlOptions: {
                        position: google.maps.ControlPosition.RIGHT_TOP
                    },
                    scaleControl: false,
                    streetViewControl: false
                });

                var marker = new google.maps.Marker({
                    map: map,
                    position: latlng,
                    title: 'Agorama - Kensal Rise, London'
                });
            });
        </script>
@endsection
