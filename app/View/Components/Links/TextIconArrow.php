<?php

namespace App\View\Components\Links;

use Illuminate\View\Component;

class TextIconArrow extends Component
{
    /**
     * booleen for check if use icon arrow left
     *
     * @var bool
     */
    public $isIconFront;

    /**
     * booleen for check if use icon arrow right
     *
     * @var bool
     */
    public $isIconBack;

    /**
     * class of balise <a></a>
     *
     * @var string
     */
    public $classA;


    /**
     * for text size of link
     *
     * @var string|null
     */
    public $textSize;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $isIconFront = false,
        $isIconBack = false,
        $classA = null,
        $textSize = null,
    ) {
        $this->isIconBack = $isIconBack;
        $this->isIconFront = $isIconFront;
        $this->classA = $classA;
        $this->textSize = $textSize;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.links.text-icon-arrow');
    }
}
