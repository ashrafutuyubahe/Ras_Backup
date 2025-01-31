<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $welcomeMessage;
    public $user;
    public $imagePath;
    public $label;

    public function __construct($welcomeMessage, $user, $imagePath, $label)
    {
        $this->welcomeMessage = $welcomeMessage;
        $this->user = $user;
        $this->imagePath = $imagePath;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.navbar');
    }
}


