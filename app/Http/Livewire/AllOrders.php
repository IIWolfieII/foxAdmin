<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class AllOrders extends Component
{
    public $orders;

    public function mount()
    {
        $this->orders = Order::all()->sortByDesc('id');
    }
    public function render()
    {
        return view('livewire.all-orders');
    }
}
