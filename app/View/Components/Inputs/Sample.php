<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Sample extends Component
{
    /**
     * for class of div global
     *
     * @var string|null
     */
    public $classDiv;

    /**
     * label of input
     *
     * @var string|null
     */
    public $label;

    /**
     * name of icon for display icon in input
     *
     * @var string|null
     */
    public $iconName; // 'user' , 'password', 'reset

    /**
     * name of input and error for input
     *
     * @var string|null
     */
    public $name;

    /**
     * class for label of input
     *
     * @var string
     */
    public $classLabel;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $iconName = null,
        $classDiv = null,
        $label = null,
        $name = null,
        $classLabel = null,
    ) {
        $this->iconName = $iconName;
        $this->classDiv = $classDiv;
        $this->label = $label;
        $this->name = $name;
        $this->classLabel = $classLabel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.sample');
    }
}
