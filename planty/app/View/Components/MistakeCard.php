<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MistakeCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $mistakeLogo;
    public function __construct($mistakeLogo)
    {
        $this->mistakeLogo = $mistakeLogo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mistake-card');
    }
}
