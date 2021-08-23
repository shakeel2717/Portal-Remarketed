<?php

namespace App\View\Components;

use Illuminate\View\Component;

class addOrderDraft extends Component
{
    public $loop;
    public $device;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($loop,$device)
    {
        $this->loop = $loop;
        $this->device = $device;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.add-order-draft');
    }
}
