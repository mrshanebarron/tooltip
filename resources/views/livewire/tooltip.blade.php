@php
$positions = [
    'top' => 'bottom-full left-1/2 -translate-x-1/2 mb-2',
    'bottom' => 'top-full left-1/2 -translate-x-1/2 mt-2',
    'left' => 'right-full top-1/2 -translate-y-1/2 mr-2',
    'right' => 'left-full top-1/2 -translate-y-1/2 ml-2',
];
$posClass = $positions[$position] ?? $positions['top'];
@endphp

<div
    class="relative inline-block"
    x-data="{ show: false }"
    @if($trigger === 'hover')
        @mouseenter="show = true"
        @mouseleave="show = false"
    @else
        @click="show = !show"
    @endif
>
    {{ $slot ?? '' }}

    <div
        x-show="show"
        x-transition
        class="absolute z-50 px-3 py-2 text-sm text-white bg-gray-900 rounded-lg shadow-lg whitespace-nowrap {{ $posClass }}"
    >
        {{ $content }}
        <div class="absolute w-2 h-2 bg-gray-900 transform rotate-45
            @if($position === 'top') -bottom-1 left-1/2 -translate-x-1/2
            @elseif($position === 'bottom') -top-1 left-1/2 -translate-x-1/2
            @elseif($position === 'left') -right-1 top-1/2 -translate-y-1/2
            @else -left-1 top-1/2 -translate-y-1/2
            @endif
        "></div>
    </div>
</div>
