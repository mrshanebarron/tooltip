<?php

namespace MrShaneBarron\Tooltip;

use Illuminate\Support\ServiceProvider;

class TooltipServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ld-tooltip.php', 'ld-tooltip');
    }

    public function boot(): void
    {
        $this->loadViewComponentsAs('ld', [View\Components\Tooltip::class]);
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-tooltip');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../config/ld-tooltip.php' => config_path('ld-tooltip.php')], 'ld-tooltip-config');
        }
    }
}
