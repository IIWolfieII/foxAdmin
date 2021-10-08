<div class="p-5 modal-edit">
    <div class="relative w-full h-6 mb-7 modal-header">
        <h2 class="absolute top-0 left-0 p-2 text-3xl font-bold text-left text-red-500">New Customer: </h2>
    </div>

    <div class="edit_content">
        <div class="table p-1 mt-5">
            <div class="table-row m-1 element">
                <label class="table-cell p-2 text-gray-400" for="customer_name"><strong>Name:</strong></label>
                <input wire:model.lazy="c_name" class="table-cell w-64 p-1 m-1 border border-gray-400 rounded-md" type="text" name="customer_name" value="">
            </div>
            <div class="table-row m-1 element">
                <label class="table-cell p-2 text-gray-400" for="customer_email"><strong>Email: </strong></label>
                <input wire:model.lazy="c_email" class="table-cell w-64 p-1 m-1 border border-gray-400 rounded-md" type="text" name="customer_email" value="">
            </div>
            <div class="table-row m-1 element">
                <label class="table-cell p-2 text-gray-400" for="customer_phone_number"><strong>Phone Number: </strong></label>
                <input wire:model.lazy="c_phone_number" class="table-cell w-64 p-1 m-1 border border-gray-400 rounded-md" type="text" name="customer_phone_number" value=""><br>
            </div>
            <div class="table-row m-1 element">
                <label class="table-cell p-2 text-gray-400 align-top max-h-5" for="customer_address"><strong>Address: </strong></label>
                <input type="text" wire:model.lazy="c_address" class="table-cell w-64 p-1 m-1 border border-gray-400 rounded-md" name="customer_address" value="{{ $c_address }}">
            </div>
        </div>

        <div class="text-end actions">
            <button wire:click="update" class="px-2 pt-1 m-1 mt-0 text-2xl text-white align-bottom bg-blue-500 rounded-md leading-0">
                <i class="far fa-save"></i>
            </button>
            <button wire:click="delete" class="px-2 pt-1 m-1 mt-0 text-2xl text-white align-bottom bg-red-700 rounded-md leading-0">
                <i class="far fa-trash-alt"></i>
            </button>
        </div>
    </div>

    {{-- <div class="relative grid p-2 bg-white recent-orders rounded-3xl">
        <div class="card-header max-h-4">
            <h2 class="text-2xl font-bold text-red-500">Orders</h2>
        </div>
        <table class="w-full mt-2 border-collapse">
            <thead class="font-bold">
                <tr class="text-gray-500 border-b border-gray-400 border-solid border-opacity-20">
                    <th class="p-3 text-start">Project</th>
                    <th class="p-3 text-end">Price</th>
                    <th class="p-3 text-center">Payment</th>
                    <th class="p-3 text-end">Status</th>
                    <th class="p-3 text-end">Actions</th>
                </tr>
            </thead>
            <tbody wire:poll>
                if(isset())
                @php
                $orders = $customer->orders;
                @endphp

                @foreach ($orders as $order)
                <tr class="text-gray-500 border-b border-gray-400 border-opacity-20 hover:bg-red-500 hover:text-white {{$loop->last ? 'border-none' : ''}}">
    <td class="p-3">{{ucwords($order->name)}}</td>
    <td class="p-3 text-end">${{number_format($order->price, 2, '.', ' ')}}</td>
    <td class="p-3 text-center">{{ $order->payment }}</td>
    <td class="p-3 text-end"><span class="status {{ str_replace(' ', '-', (strtolower($order->status))) }}">{{ $order->status }}</span></td>
    <td class="p-3 text-end">
        <button wire:click="deleteOrder({{ $order->id }})" class="px-2 pt-1 m-1 mt-0 text-2xl text-white align-bottom bg-red-700 rounded-md leading-0">
            <i class="far fa-trash-alt"></i>
        </button>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</div> --}}
</div>