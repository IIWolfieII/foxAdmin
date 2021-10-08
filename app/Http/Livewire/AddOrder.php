<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Order;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddOrder extends ModalComponent
{
    public Customer $customer;

    public $o_name = null;
    public $o_desc = null;
    public $o_price = null;
    public $o_payment = null;
    public $o_status = null;

    public function mount(int $customerId)
    {
        $this->customer = Customer::find($customerId);
    }

    public function resetProps()
    {
        $this->reset(['o_name', 'o_desc', 'o_price', 'o_payment', 'o_status']);
    }

    public function create(int $customerId)
    {
        if (!isset($this->o_payment)) $this->o_payment = 'Due';
        if (!isset($this->o_status)) $this->o_status = 'Pending';

        Order::create([
            'name' => $this->o_name,
            'description' => $this->o_desc,
            'price' => $this->o_price,
            'customer_id' => $customerId,
            'payment' => $this->o_payment,
            'status' => $this->o_status
        ]);
        $this->closeModal();
        $this->resetProps();
    }

    public function render()
    {
        return view('livewire.add-order');
    }
}
