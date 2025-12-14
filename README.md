# Laravel Design Tooltip

Lightweight tooltip component for Laravel. Uses Alpine.js with Blade components and Vue 3.

## Installation

```bash
composer require mrshanebarron/tooltip
```

For Vue components:
```bash
npm install @laraveldesign/tooltip
```

## Usage

### Blade Component

```blade
<x-ld-tooltip text="This is a tooltip">
    <button>Hover me</button>
</x-ld-tooltip>

{{-- Different positions --}}
<x-ld-tooltip text="Top tooltip" position="top">
    <span>Top</span>
</x-ld-tooltip>

<x-ld-tooltip text="Bottom tooltip" position="bottom">
    <span>Bottom</span>
</x-ld-tooltip>

<x-ld-tooltip text="Left tooltip" position="left">
    <span>Left</span>
</x-ld-tooltip>

<x-ld-tooltip text="Right tooltip" position="right">
    <span>Right</span>
</x-ld-tooltip>

{{-- With delay --}}
<x-ld-tooltip text="Delayed tooltip" :delay="500">
    <button>Hover for 500ms</button>
</x-ld-tooltip>

{{-- Without arrow --}}
<x-ld-tooltip text="No arrow" :arrow="false">
    <button>No arrow</button>
</x-ld-tooltip>
```

### Vue 3 Component

```vue
<script setup>
import { LdTooltip } from '@laraveldesign/tooltip'
</script>

<template>
  <LdTooltip text="Hello from tooltip!" position="top">
    <button>Hover me</button>
  </LdTooltip>

  <LdTooltip text="Click for more info" position="bottom" :delay="200">
    <span class="info-icon">?</span>
  </LdTooltip>
</template>
```

### HTML Tooltips

```blade
<x-ld-tooltip>
    <x-slot name="content">
        <strong>Rich Content</strong>
        <p>You can include HTML in tooltips.</p>
    </x-slot>

    <button>Hover for rich tooltip</button>
</x-ld-tooltip>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `text` | string | required | Tooltip text content |
| `position` | string | `'top'` | Position: `top`, `bottom`, `left`, `right` |
| `delay` | number | `0` | Delay in milliseconds before showing |
| `arrow` | boolean | `true` | Show tooltip arrow |

## Configuration

Publish the config file:

```bash
php artisan vendor:publish --tag=ld-tooltip-config
```

## Customization

### Publishing Views

```bash
php artisan vendor:publish --tag=ld-tooltip-views
```

### Styling

The tooltip uses Tailwind CSS classes. The default styling includes:
- Dark background with white text
- Smooth fade-in animation
- Arrow indicator
- Rounded corners

Customize by publishing views and modifying the CSS classes.

## License

MIT
