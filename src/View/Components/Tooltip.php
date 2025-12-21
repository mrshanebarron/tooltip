<?php

namespace MrShaneBarron\Tooltip\View\Components;

use Illuminate\View\Component;

class Tooltip extends Component
{
    public function __construct(
        public string $content = '',
        public string $position = 'top',
        public string $trigger = 'hover',
    ) {}

    public function render()
    {
        return view('sb-tooltip::components.tooltip');
    }
}
