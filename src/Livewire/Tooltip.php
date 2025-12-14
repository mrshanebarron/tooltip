<?php

namespace MrShaneBarron\Tooltip\Livewire;

use Livewire\Component;

class Tooltip extends Component
{
    public string $content = '';
    public string $position = 'top';
    public string $trigger = 'hover';

    public function mount(string $content = '', string $position = 'top', string $trigger = 'hover'): void
    {
        $this->content = $content;
        $this->position = $position;
        $this->trigger = $trigger;
    }

    public function render()
    {
        return view('ld-tooltip::livewire.tooltip');
    }
}
