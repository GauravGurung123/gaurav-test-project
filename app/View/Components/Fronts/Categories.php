<?php

namespace App\View\Components\Fronts;

use Illuminate\View\Component;

class Categories extends Component
{
    // public $name;
    public $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categories)
    {
        $this->categories = $categories;
        // $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.fronts.categories');
    }
}
