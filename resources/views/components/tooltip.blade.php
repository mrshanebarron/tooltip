@php
$positions = [
    'top' => 'bottom: 100%; left: 50%; transform: translateX(-50%); margin-bottom: 8px;',
    'bottom' => 'top: 100%; left: 50%; transform: translateX(-50%); margin-top: 8px;',
    'left' => 'right: 100%; top: 50%; transform: translateY(-50%); margin-right: 8px;',
    'right' => 'left: 100%; top: 50%; transform: translateY(-50%); margin-left: 8px;',
];
$arrowPositions = [
    'top' => 'bottom: -4px; left: 50%; transform: translateX(-50%) rotate(45deg);',
    'bottom' => 'top: -4px; left: 50%; transform: translateX(-50%) rotate(45deg);',
    'left' => 'right: -4px; top: 50%; transform: translateY(-50%) rotate(45deg);',
    'right' => 'left: -4px; top: 50%; transform: translateY(-50%) rotate(45deg);',
];
$posStyle = $positions[$position] ?? $positions['top'];
$arrowStyle = $arrowPositions[$position] ?? $arrowPositions['top'];
@endphp

<div
    style="position: relative; display: inline-block;"
    x-data="{ show: false }"
    @if($trigger === 'hover')
        x-on:mouseenter="show = true"
        x-on:mouseleave="show = false"
    @else
        x-on:click="show = !show"
    @endif
>
    {{ $slot }}

    <div
        :class="show ? 'sb-tooltip-visible' : 'sb-tooltip-hidden'"
        style="position: absolute; z-index: 50; padding: 8px 12px; font-size: 14px; color: white; background: #111827; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); white-space: nowrap; {{ $posStyle }}"
    >
        {{ $content }}
        <div style="position: absolute; width: 8px; height: 8px; background: #111827; {{ $arrowStyle }}"></div>
    </div>
    <style>
        .sb-tooltip-hidden { visibility: hidden; opacity: 0; transition: opacity 150ms ease, visibility 150ms ease; }
        .sb-tooltip-visible { visibility: visible; opacity: 1; transition: opacity 150ms ease, visibility 150ms ease; }
    </style>
</div>
