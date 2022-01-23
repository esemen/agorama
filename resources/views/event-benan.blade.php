@extends('layout.master')

@section('wrapper')
    <div class="min-h-screen flex flex-col">
        <div
            class="h-72 pt-16 flex items-center justify-center bg-black bg-cover bg-center bg-blend-overlay bg-opacity-75 overflow-hidden"
            style="background-image: url('{{ asset('images/full-table.jpg') }}')">
            <h1 class="text-4xl text-white font-serif">Turkish Tavern Night with Benan</h1>
        </div>

        <div class="container max-w-screen-lg pb-4 flex-grow shadow-2xl">
            <div class="flex flex-col py-4 space-y-4">
                <img src="{{ asset('images/events/cello_benan.jpeg') }}">
            </div>
            <div class="flex flex-col py-4 space-y-4">
                <img src="{{ asset('images/events/cello_benan_menu.jpeg') }}">
            </div>
        </div>
    </div>
@endsection

@push('footer-scripts')
    <script>
        lightbox.option({
            'resizeDuration': 500,
            'fitImagesInViewport': true,
            'wrapAround': true
        })
    </script>
@endpush
