@extends('layout.master')

@section('wrapper')
    <div class="min-h-screen flex flex-col">
        <div
            class="h-72 pt-16 flex items-center justify-center bg-black bg-cover bg-center bg-blend-overlay bg-opacity-75 overflow-hidden"
            style="background-image: url('{{ asset('images/bg-landing.jpg') }}')">
            <h1 class="text-4xl text-white font-serif">Menu</h1>
        </div>

        <div class="container max-w-screen-lg pb-24 flex-grow shadow-2xl">
            <div class="flex flex-col space-y-8 md:space-x-0 md:flex-row justify-evenly py-16">
                <a href="{{ route('menu-dinein') }}" class="w-full md:w-1/3 border border-gray-400 relative transform hover:scale-110 hover:shadow-2xl transition-all">
                    <img src="{{ asset('images/menu/Page1-Front.jpg') }}">
                    <div class="absolute flex flex-col items-center justify-center top-1/2 h-24 w-full bg-gray-800 bg-opacity-75 transform -translate-y-1/2 text-white text-xl">
                        <div><i class="fa fa-utensils"></i></div>
                        <div class="text-center">Dine-in Menu</div>
                    </div>
                </a>
                <a href="{{ route('menu-takeaway') }}" class="w-full md:w-1/3 border border-gray-400 relative transform hover:scale-110 hover:shadow-2xl transition-all">
                    <img src="{{ asset('images/menu/Takeaway-Front.jpg') }}">
                    <div class="absolute flex flex-col items-center justify-center top-1/2 h-24 w-full bg-gray-800 bg-opacity-75 transform -translate-y-1/2 text-white text-xl">
                        <div><i class="fa fa-shopping-basket"></i></div>
                        <div class="text-center">Takeaway Menu</div>
                    </div>
                </a>
            </div>

{{--            @foreach ($foodMenu->foods as $menuCategory)--}}
{{--                <x-menu.food-category :category="$menuCategory"></x-menu.food-category>--}}
{{--            @endforeach--}}


{{--            @foreach ($foodMenu->drinks as $menuCategory)--}}
{{--                <x-menu.drink-category :category="$menuCategory"></x-menu.drink-category>--}}
{{--            @endforeach--}}
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
