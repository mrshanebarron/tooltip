<div
    x-data="{ show: false }"
    @mouseenter="setTimeout(() => show = true, {{ $delay }})"
    @mouseleave="show = false"
    class="relative inline-block"
>
    {{ $slot }}

    <div
        x-show="show"
        x-cloak
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-50 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm whitespace-nowrap
            {{ $position === 'top' ? 'bottom-full left-1/2 -translate-x-1/2 mb-2' : '' }}
            {{ $position === 'bottom' ? 'top-full left-1/2 -translate-x-1/2 mt-2' : '' }}
            {{ $position === 'left' ? 'right-full top-1/2 -translate-y-1/2 mr-2' : '' }}
            {{ $position === 'right' ? 'left-full top-1/2 -translate-y-1/2 ml-2' : '' }}"
    >
        {{ $text }}
        @if($arrow)
            <div class="absolute w-2 h-2 bg-gray-900 transform rotate-45
                {{ $position === 'top' ? 'top-full left-1/2 -translate-x-1/2 -mt-1' : '' }}
                {{ $position === 'bottom' ? 'bottom-full left-1/2 -translate-x-1/2 -mb-1' : '' }}
                {{ $position === 'left' ? 'left-full top-1/2 -translate-y-1/2 -ml-1' : '' }}
                {{ $position === 'right' ? 'right-full top-1/2 -translate-y-1/2 -mr-1' : '' }}">
            </div>
        @endif
    </div>
</div>
