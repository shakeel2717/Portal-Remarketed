<?php

namespace App\View\Components;

use Illuminate\View\Component;

class showOrder extends Component
{
    public $allDevices;
    public $order;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($allDevices,$order)
    {
        $this->allDevices = $allDevices;
        $this->order = $order;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.show-order');
    }
}
