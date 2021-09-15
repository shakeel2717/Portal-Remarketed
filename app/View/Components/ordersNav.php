<?php

namespace App\View\Components;

use App\Models\order;
use Illuminate\View\Component;

class ordersNav extends Component
{
    // public $draft;
    // public $quote;
    // public $reserved;
    // public $shipped;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $draft = order::where('status', 'Draft')->where('users_id', session('user')[0]->id)->count();
        $quote = order::where('status', 'Quote')->where('users_id', session('user')[0]->id)->count();
        $reserved = order::where('status', 'Reserved')->where('users_id', session('user')[0]->id)->count();
        $shipped = order::where('status', 'Shipped')->where('users_id', session('user')[0]->id)->count();
        return view('components.orders-nav', [
            'draft' => $draft,
            'quote' => $quote,
            'reserved' => $reserved,
            'shipped' => $shipped,
        ]);
    }
}
