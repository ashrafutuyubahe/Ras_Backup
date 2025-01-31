<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $headers;
    public $rows;

    /**
     * Create a new component instance.
     *
     * @param array $headers
     * @param array $rows
     */
    public function __construct($headers, $rows)
    {
        $this->headers = $headers;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.table');
    }
}

