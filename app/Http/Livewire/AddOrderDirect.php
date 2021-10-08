<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Order;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddOrderDirect extends ModalComponent
{
    public $customers;
    public $customer;
    public $o_name = null;
    public $o_customerId;
    public $o_desc = null;
    public $o_price = null;
    public $o_payment = null;
    public $o_status = null;
    public $o_customer_name = null;

    public function mount()
    {
        $this->customers = Customer::all();
    }

    public function resetProps()
    {
        $this->reset(['o_name', 'o_customerId', 'o_desc', 'o_price', 'o_payment', 'o_status']);
    }

    public function create()
    {
        $this->customer = Customer::all()->firstWhere('name', "$this->o_customer_name");
        $this->o_customerId = $this->customer->id;
        if (!isset($this->o_payment)) $this->o_payment = 'Due';
        if (!isset($this->o_status)) $this->o_status = 'Pending';
        if (!isset($this->o_customer_name)) $this->o_customerId = 1;

        Order::create([
            'name' => $this->o_name,
            'description' => $this->o_desc,
            'price' => $this->o_price,
            'customer_id' => $this->o_customerId,
            'payment' => $this->o_payment,
            'status' => $this->o_status
        ]);
        $this->closeModal();
        $this->resetProps();
    }
    public function render()
    {
        return view('livewire.add-order-direct');
    }
}
