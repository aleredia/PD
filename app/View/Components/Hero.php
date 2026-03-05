<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    public $title;
    public $subtitle;
    public $color;

    public function __construct($title = null, $subtitle = null, $color = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->color = $color;
    }

    public function render()
    {
        return view('components.hero');
    }
}
