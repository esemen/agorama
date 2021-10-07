@props([
    'category' => []
])

<h3 class="text-base text-2xl text-center mt-8 font-bold tracking-wide uppercase text-gold">{{ $category->name }}</h3>
@if ($category->description ?? '' <> '')
    <div class="text-lg italic text-center text-gray-700">
        {{ $category->description }}
    </div>
@endif

<div class="font-serif my-4">
    @foreach ($category->categories ?? [] as $subCategory)
        <x-menu.subcategory :category="$subCategory"></x-menu.subcategory>
    @endforeach

    @foreach ($category->items ?? [] as $menuItem)
        <div class="my-4">
            <div class="flex items-baseline space-x-2">
                <div class="font-semibold text-gray-700 text-base">{{ $menuItem->name }}
                    @if($menuItem->vegan ?? false)
                        <span
                            class="bg-green-700 font-medium ml-1 py-1 px-2 text-xxs text-white rounded-full">vegan</span>
                    @endif
                    @if($menuItem->spicy ?? false)
                        <span class="bg-red-600 font-medium ml-1 py-1 px-2 text-xxs text-white rounded-full">spicy</span>
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
