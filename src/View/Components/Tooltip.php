<?php

namespace MrShaneBarron\Tooltip\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tooltip extends Component
{
    public function __construct(
        public string $text,
        public string $position = 'top',
        public int $delay = 0,
        public bool $arrow = true
    ) {}

    public function render(): View
    {
        return view('ld-tooltip::components.tooltip');
    }
}
