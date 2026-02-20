<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class message extends Component
{
    public $message;
    public $status;
    /**
     * Create a new component instance.
     */
    public function __construct($message, $status)
    {
        $this -> message=$message;
        $this -> status=$status;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message');
    }
}
