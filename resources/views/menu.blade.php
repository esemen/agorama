@extends('layout.master')

@section('wrapper')
    <div
        class="h-72 pt-16 flex items-center justify-center bg-black bg-cover bg-center bg-blend-overlay bg-opacity-75 overflow-hidden"
        style="background-image: url('{{ asset('images/bg-landing.jpg') }}')">
        <h1 class="text-4xl text-white font-serif">Menu</h1>
    </div>

    <div class="container max-w-screen-lg">
        @foreach ($foodMenu as $menuCategory)
            <h3 class="text-base text-2xl text-center mt-8 font-bold tracking-wide uppercase text-gold">{{ $menuCategory->name }}</h3>
            <div class="font-serif my-4">
                @foreach ($menuCategory->items as $menuItem)
                    <div class="my-4">
                        <div class="flex items-baseline space-x-2">
                            <div class="font-semibold text-gray-700 text-base">{{ $menuItem->name }}
                                @if($menuItem->vegan ?? false)
                                    <span class="bg-green-700 font-medium ml-1 py-1 px-2 text-xxs text-white rounded-full">vegan</span>
                                @endif
                                @if($menuItem->hot ?? false)
                                    <span class="bg-red-600 font-medium ml-1 py-1 px-2 text-xxs text-white rounded-full">hot</span>
                                @endif
                            </div>
                            <div class="flex-grow border-b-2 border-gray-200 border-dotted"></div>
                            <div class="font-bold text-gold">{{ number_format($menuItem->price,2) }}</div>
                        </div>
                        <div class="flex items-baseline justify-between">
                            <div class="font-normal text-gray-700 text-xs">{{ $menuItem->description }}</div>
                            <div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
