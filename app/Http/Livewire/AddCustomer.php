<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddCustomer extends ModalComponent
{
    public $c_name;
    public $c_email;
    public $c_phone_number;
    public $c_address;

    public function update()
    {
        Customer::create([
            'name' => $this->c_name,
            'email' => $this->c_email,
            'phone_number' => $this->c_phone_number,
            'address' => $this->c_address
        ]);
        $this->closeModal();
        redirect('/customers');
    }

    public function render()
    {
        return view('livewire.add-customer');
    }
}
