<?php

namespace App\View\Components;

use Illuminate\View\Component;

class offerDevice extends Component
{
    public $loop;
    public $device;
    public $orders;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($loop,$device,$orders)
    {
        $this->loop = $loop;
        $this->device = $device;
        $this->orders = $orders;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.offer-device');
    }
}
