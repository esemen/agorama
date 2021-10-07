@props([
    'category' => []
])

<h3 class="flex justify-between items-baseline text-base text-xl font-semibold tracking-wide text-gold border-b border-gold {{ $category->name == '' ? '-mt-4' : 'mt-8' }}">
    <div>
        {{ $category->name }}
    </div>
    <div class="text-sm text-gray-700">
        @foreach($category->units ?? [] as $unit)
            {{ $unit }}
        @endforeach
    </div>
</h3>

<div class="font-serif my-4">
    @foreach ($category->items ?? [] as $menuItem)
        <div class="my-4">
            <div class="flex items-baseline space-x-2">
                <div class="font-medium text-gray-700 text-sm">{{ $menuItem->name }}</div>
                <div class="flex-grow border-b-2 border-gray-200 border-dotted"></div>
                @foreach($menuItem->price as $price)
                    <div class="font-bold text-gold">{{ number_format($price,2) }}</div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
