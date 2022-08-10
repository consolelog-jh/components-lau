<?php

namespace App\View\Components\UserForms;

use Illuminate\View\Component;

class Register extends Component
{
    /**
     * list roles
     *
     * @var [type]
     */
    public $roles;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($roles = null)
    {
        $this->roles = $roles;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user-forms.register');
    }
}
