<?php

namespace MrShaneBarron\Tooltip;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class TooltipServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sb-tooltip');

        // Register as a Blade component for proper slot support
        Blade::component('sb-tooltip', \MrShaneBarron\Tooltip\View\Components\Tooltip::class);
    }
}
