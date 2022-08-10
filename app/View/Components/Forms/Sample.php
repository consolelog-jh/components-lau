<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Sample extends Component
{
    /**
     * other method (delete, put)
     *
     * @var string
     */
    public $otherMethod;

    /**
     * link for action
     *
     * @var mixed
     */
    public $action;

    /**
     * method of form action
     *
     * @var string
     */
    public $method;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $otherMethod = null,
        $action = null,
        $method = 'POST'
    ) {
        $this->otherMethod = $otherMethod;
        $this->action = $action;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.sample');
    }
}
