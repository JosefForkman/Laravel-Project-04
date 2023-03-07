<?php

namespace App\View\Components;

use App\Models\categories;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class productCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $Products;
    public function __construct(public categories $categorie)
    {
        $this->Products = $categorie;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
