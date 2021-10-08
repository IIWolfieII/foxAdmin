<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class RecentCustomers extends Component
{
    public $customers;

    public function mount()
    {
        $this->customers = Customer::all();
    }

    public function render()
    {
        return view('livewire.recent-customers');
    }
}
