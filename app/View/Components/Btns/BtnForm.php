<?php

namespace App\View\Components\Btns;

use Illuminate\View\Component;

class BtnForm extends Component
{
    /**
     * class for div global
     *
     * @var string|null
     */
    public $classDiv;

    /**
     * class for btn of form
     *
     * @var string|null
     */
    public $classBtn;

    /**
     * type of btn default => 'submit'
     *
     * @var string|null
     */
    public $type;

    /**
     * Create a new component instance.
     *
     * @param string|null $type
     * @param string|null $classBtn
     * @param string|null $classDiv
     */
    public function __construct(
        $type = null,
        $classBtn = null,
        $classDiv = null,
    ) {
        $this->classDiv = $classDiv;
        $this->classBtn = $classBtn;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.btns.btn-form');
    }
}
