<?php

namespace App\View\Components;

use App\Models\categories;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sideMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public $categories;
    public function __construct()
    {
        $this->categories = categories::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.side-menu');
    }
}
