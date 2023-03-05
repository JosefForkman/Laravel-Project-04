<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\products;

class productCard extends Component
{
    /**
     * Create a new component instance.
     */
    public products $Prodokt;
    public function __construct( public products $prodokt )
    {
        $this->Prodokt = $prodokt->Categories;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
