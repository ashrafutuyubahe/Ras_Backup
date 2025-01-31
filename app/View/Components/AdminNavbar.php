<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $welcomeMessage;
    public $user;

    public function __construct($welcomeMessage, $user)
    {
        $this->welcomeMessage = $welcomeMessage;
        $this->user = $user;
    }

    public function render()
    {
        return view('classmonitors.components.navbar');
    }
}
