<?php

namespace App\View\Components\Titles;

use Illuminate\View\Component;

class H1 extends Component
{
    /**
     * additional class for h
     *
     * @var string
     */
    public $addClass;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($addClass = null)
    {
        $this->addClass = $addClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.titles.h1');
    }
}
