<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class NavbarLogin extends Component
{
    public array $navigationLoginItems = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationLoginItems = [
            ['label' => 'Login', 'href' => "/login"],
            ['label' => 'Register', 'href' => "/register"],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.navbar-login');
    }
}
