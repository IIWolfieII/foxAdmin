<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class RecentOrders extends Component
{
    public $orders;

    public function mount()
    {
        $this->orders = Order::all();
    }

    public function render()
    {
        return view('livewire.recent-orders');
    }
}
