<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * label for input
     *
     * @var [type]
     */
    public $label;

    /**
     * placeholder of select input
     *
     * @var [type]
     */
    public $placeholder;

    /**
     * entité for select input
     *
     * @var [mixed]
     */
    public $entities;

    /**
     * data for selected option of select input
     *
     * @var [type]
     */
    public $selected;

    /**
     * name for input
     *
     * @var [type]
     */
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label = null,
        $placeholder = null,
        $entities = null,
        $selected = null,
        $name = null,
    ) {
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->entities = $entities;
        $this->selected = $selected;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.select');
    }
}
