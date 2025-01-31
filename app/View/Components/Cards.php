<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cards extends Component
{
// In App\View\Components\Cards.php
public $presentCount;
public $absentCount;
public $increaseRate;
public $submittedReports;
public $lastHeading;


public function __construct($presentCount, $absentCount, $increaseRate, $submittedReports,$lastHeading)
{
    $this->presentCount = $presentCount;
    $this->absentCount = $absentCount;
    $this->increaseRate = $increaseRate;
    $this->submittedReports = $submittedReports;
    $this->lastHeading = $lastHeading;



}


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards');
    }
}
