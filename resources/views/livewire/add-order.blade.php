<div class="p-5 edit_content">
    <div class="relative w-full h-6 pb-2 mb-7 modal-header">
        <h2 class="absolute top-0 left-0 p-2 text-3xl font-bold text-left text-red-500">Create Order For: </h2>
        <h2 class="absolute top-0 right-0 p-2 text-3xl font-bold text-right text-white bg-red-500 rounded-lg">[ {{ $customer->name }} ]</h2>
    </div>

    <div class="table p-1 mt-10">
        <div class="table-row m-1 element">
            <label class="table-cell p-2 text-gray-400" for="order_name"><strong>Name: </strong></label>
            <input wire:model="o_name" class="table-cell w-64 p-1 m-1 border border-gray-400 rounded-md" type="text" name="order_name" value="">
        </div>
        <div class="table-row m-1 element">
            <label class="table-cell p-2 text-gray-400" for="order_desc"><strong>Description: </strong></label>
            <input wire:model="o_desc" class="table-cell w-64 p-1 m-1 border border-gray-400 rounded-md" type="text" name="order_desc" value="">
        </div>
        <div class="table-row m-1 element">
            <label class="table-cell p-2 text-gray-400" for="order_price"><strong>Price: </strong></label>
            <input wire:model="o_price" class="table-cell w-64 p-1 m-1 border border-gray-400 rounded-md" type="number" name="order_price" value=""><br>
        </div>
        <div class="table-row m-1 element">
            <label class="table-cell p-2 text-gray-400 align-top max-h-5" for="order_payment"><strong>Payment: </strong></label>
            <select wire:model="o_payment" class="table-cell w-64 p-1 m-1 border border-gray-400 rounded-md" name="order_payment">
                <option selected value="Due" default>Due</option>
                <option value="Paid">Paid</option>
            </select>
        </div>
        <div class="table-row m-1 element">
            <label class="table-cell p-2 text-gray-400 align-top max-h-5" for="order_status"><strong>Status: </strong></label>
            <select wire:model="o_status" class="table-cell w-64 p-1 m-1 border border-gray-400 rounded-md" name="order_status">
                <option selected value="Pending">Pending</option>
                <option value="In Progress">In Progress</option>
                <option value="Delivered">Delivered</option>
            </select>
        </div>
    </div>

    <div class="text-end actions">
        <button wire:click="create('{{ $customer->id }}')" class="px-2 pt-1 m-1 mt-0 text-2xl text-white align-bottom bg-blue-500 rounded-md leading-0">
            <i class="far fa-save"></i>
        </button>
        <button wire:click="$emit('closeModal')" class="px-2 pt-1 m-1 mt-0 text-2xl text-white align-bottom bg-red-700 rounded-md leading-0">
            <i class="far fa-window-close"></i>
        </button>
    </div>
</div>