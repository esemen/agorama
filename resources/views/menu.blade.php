@extends('layout.master')

@section('wrapper')
    <div
        class="h-72 pt-16 flex items-center justify-center bg-black bg-cover bg-center bg-blend-overlay bg-opacity-75 overflow-hidden"
        style="background-image: url('{{ asset('images/bg-landing.jpg') }}')">
        <h1 class="text-4xl text-white font-serif">Menu</h1>
    </div>

    <div class="container max-w-screen-lg">
        @foreach ($foodMenu as $menuCategory)
            <x-menu.category :category="$menuCategory" ></x-menu.category>
        @endforeach
    </div>
@endsection
