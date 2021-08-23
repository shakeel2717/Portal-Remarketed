<?php

namespace App\View\Components;

use Illuminate\View\Component;

class allDevices extends Component
{
    public $allDevices;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($allDevices)
    {
        $this->allDevices = $allDevices;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.all-devices');
    }
}
