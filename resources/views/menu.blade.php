@extends('layout.master')

@section('wrapper')
    <div class="min-h-screen flex flex-col">
        <div
            class="h-72 pt-16 flex items-center justify-center bg-black bg-cover bg-center bg-blend-overlay bg-opacity-75 overflow-hidden"
            style="background-image: url('{{ asset('images/bg-landing.jpg') }}')">
            <h1 class="text-4xl text-white font-serif">Menu</h1>
        </div>

        <div class="container max-w-screen-lg pb-24 flex-grow shadow-2xl">
            @foreach ($foodMenu->foods as $menuCategory)
                <x-menu.food-category :category="$menuCategory"></x-menu.food-category>
            @endforeach


            @foreach ($foodMenu->drinks as $menuCategory)
                <x-menu.drink-category :category="$menuCategory"></x-menu.drink-category>
            @endforeach
        </div>
    </div>
@endsection
