<?php

namespace MrShaneBarron\Tooltip;

use Illuminate\Support\ServiceProvider;

class TooltipServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('sb-tooltip', Livewire\Tooltip::class);
        }
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sb-tooltip');
    }
}
