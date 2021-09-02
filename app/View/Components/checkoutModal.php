<?php

namespace App\View\Components;

use Illuminate\View\Component;

class checkoutModal extends Component
{
    public $orders;
    public $addresses;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($orders,$addresses)
    {
        $this->orders = $orders;
        $this->addresses = $addresses;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.checkout-modal');
    }
}
