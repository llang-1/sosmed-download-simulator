<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonRipple extends Component
{
    public $typeButton;

    public function __construct($typeButton)
    { 
        $this->typeButton = $typeButton;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-ripple');
    }
}
