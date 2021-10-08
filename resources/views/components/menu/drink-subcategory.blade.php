@props([
    'category' => []
])

<h3 class="flex justify-between items-baseline text-base text-xl font-semibold tracking-wide text-gold border-b border-gold {{ $category->name == '' ? '-mt-4' : 'mt-8' }}">
    <div>
        {{ $category->name }}
    </div>
    <div class="flex flex-nowrap text-sm text-gray-700">
        @foreach($category->units ?? [] as $unit)
            <div class="w-18 text-right">{{ $unit }}</div>
        @endforeach
    </div>
</h3>

<div class="font-serif my-4">
    @foreach ($category->items ?? [] as $menuItem)
        <div class="my-4">
            <div class="flex items-baseline space-x-2">
                <div class="font-medium text-gray-700 text-sm">{{ $menuItem->name }}</div>
                <div class="flex-grow border-b-2 border-gray-200 border-dotted"></div>
                <div class="flex flex-nowrap">
                    @foreach($menuItem->price as $price)
                        <div class="w-18 font-bold text-gold text-right">{{ number_format($price,2) }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>
