<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Customer;

class EditCustomer extends ModalComponent
{
    public Customer $customer;
    public $c_name;
    public $c_email;
    public $c_phone_number;
    public $c_address;

    public function mount(int $customerId)
    {
        $this->customer = Customer::find($customerId);
        $this->c_name = $this->customer->name;
        $this->c_email = $this->customer->email;
        $this->c_phone_number = $this->customer->phone_number;
        $this->c_address = $this->customer->address;
    }

    public function render()
    {
        return view('livewire.edit-customer');
    }

    public function update()
    {
        $this->customer->update([
            'name' => $this->c_name,
            'email' => $this->c_email,
            'phone_number' => $this->c_phone_number,
            'address' => $this->c_address
        ]);
        $this->closeModal();
    }

    public function delete()
    {
        $this->customer->delete();
        $this->closeModal();
    }

    public function createOrder($name, $description, $price, $payment, $status)
    {
        $this->customer->orders->create([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'payment' => $payment,
            'status' => $status
        ]);
    }

    public function deleteOrder($id)
    {
        $this->customer->orders->find($id)->delete();
    }
}
