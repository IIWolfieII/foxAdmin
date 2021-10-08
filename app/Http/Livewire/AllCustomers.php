<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class AllCustomers extends Component
{
    public $customers;

    public function mount()
    {
        $this->customers = Customer::all()->sortByDesc('id');
    }

    public function render()
    {
        return view('livewire.all-customers');
    }
}
