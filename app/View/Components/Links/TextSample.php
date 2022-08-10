<?php

namespace App\View\Components\Links;

use Illuminate\View\Component;

class TextSample extends Component
{
    /**
     * for class of balise a
     *
     * @var string|null
     */
    public $classA;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $classA = null,
    ) {
        $this->classA = $classA;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.links.text-sample');
    }
}
