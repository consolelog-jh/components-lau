<?php

namespace App\View\Components\Btns;

use Illuminate\View\Component;

class BtnSample extends Component
{
    /**
     * class global on balide div
     *
     * @var string
     */
    public $classDiv;

    /**
     * class for balise button
     *
     * @var string
     */
    public $classBtn;

    /**
     * type of btn default => 'button'
     *
     * @var string|null
     */
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $classDiv = null,
        $classBtn = null,
        $type = null,
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
        return view('components.btns.btn-sample');
    }
}
