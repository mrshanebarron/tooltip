# Tooltip

A lightweight tooltip component for Laravel applications. Displays helpful hints on hover or click. Works with Livewire and Vue 3.

## Installation

```bash
composer require mrshanebarron/tooltip
```

## Livewire Usage

### Basic Usage

```blade
<livewire:sb-tooltip content="This is a tooltip">
    <button>Hover me</button>
</livewire:sb-tooltip>
```

### Positions

```blade
<livewire:sb-tooltip content="Top tooltip" position="top">
    <button>Top</button>
</livewire:sb-tooltip>

<livewire:sb-tooltip content="Bottom tooltip" position="bottom">
    <button>Bottom</button>
</livewire:sb-tooltip>

<livewire:sb-tooltip content="Left tooltip" position="left">
    <button>Left</button>
</livewire:sb-tooltip>

<livewire:sb-tooltip content="Right tooltip" position="right">
    <button>Right</button>
</livewire:sb-tooltip>
```

### Click Trigger

```blade
<livewire:sb-tooltip content="Click to see this" trigger="click">
    <button>Click me</button>
</livewire:sb-tooltip>
```

### Livewire Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `content` | string | `''` | Tooltip text |
| `position` | string | `'top'` | Position: `top`, `bottom`, `left`, `right` |
| `trigger` | string | `'hover'` | Trigger: `hover` or `click` |

## Vue 3 Usage

### Setup

```javascript
import { SbTooltip } from './vendor/sb-tooltip';
app.component('SbTooltip', SbTooltip);
```

### Basic Usage

```vue
<template>
  <SbTooltip content="This is helpful information">
    <button>Hover for help</button>
  </SbTooltip>
</template>
```

### Positions

```vue
<template>
  <SbTooltip content="Top tooltip" position="top">
    <button>Top</button>
  </SbTooltip>

  <SbTooltip content="Bottom tooltip" position="bottom">
    <button>Bottom</button>
  </SbTooltip>

  <SbTooltip content="Left tooltip" position="left">
    <button>Left</button>
  </SbTooltip>

  <SbTooltip content="Right tooltip" position="right">
    <button>Right</button>
  </SbTooltip>
</template>
```

### Click to Show

```vue
<template>
  <SbTooltip content="Copied!" trigger="click">
    <button @click="copyText">Copy to clipboard</button>
  </SbTooltip>
</template>
```

### Icon Buttons Example

```vue
<template>
  <div class="flex gap-2">
    <SbTooltip content="Edit">
      <button class="p-2 hover:bg-gray-100 rounded">
        <EditIcon />
      </button>
    </SbTooltip>

    <SbTooltip content="Delete">
      <button class="p-2 hover:bg-gray-100 rounded">
        <TrashIcon />
      </button>
    </SbTooltip>

    <SbTooltip content="Share">
      <button class="p-2 hover:bg-gray-100 rounded">
        <ShareIcon />
      </button>
    </SbTooltip>
  </div>
</template>
```

### Form Field Help

```vue
<template>
  <div class="flex items-center gap-2">
    <label>API Key</label>
    <SbTooltip content="Your API key can be found in Settings > Developer">
      <svg class="w-4 h-4 text-gray-400 cursor-help">
        <!-- Help icon -->
      </svg>
    </SbTooltip>
  </div>
  <input type="text" v-model="apiKey" />
</template>
```

### Vue Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `content` | String | `''` | Tooltip text content |
| `position` | String | `'top'` | Position: `top`, `bottom`, `left`, `right` |
| `trigger` | String | `'hover'` | How to show: `hover` or `click` |

## Features

- **Four Positions**: Top, bottom, left, right
- **Two Triggers**: Hover or click
- **Arrow Indicator**: Points to target element
- **Smooth Animation**: Fade in/out transitions

## Styling

Uses Tailwind CSS:
- Dark gray background (gray-900)
- White text
- Rounded corners
- Shadow effect
- Arrow/pointer indicator

## Accessibility

Tooltips provide supplementary information. For critical information, ensure it's also available through other means.

## Requirements

- PHP 8.1+
- Laravel 10, 11, or 12
- Tailwind CSS 3.x

## License

MIT License
