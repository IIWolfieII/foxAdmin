<div class="relative grid p-5 bg-white all-orders rounded-3xl">
    <div class="flex items-start justify-between card-header">
        <h2 class="text-2xl font-bold text-red-500">All Orders</h2>
        <button class="relative px-2 py-0.5 text-lg text-white bg-green-500 rounded-md leading-0 button" wire:click='$emit("openModal", "add-order-direct")'>
            <i class="fas fa-plus"></i>
        </button>
    </div>
    <table class="w-full mt-2 border-collapse">
        <thead class="font-bold">
            <tr class="text-gray-500 border-b border-gray-400 border-solid border-opacity-20">
                <th class="p-3 text-start">Project</th>
                <th class="p-3 text-start">Customer</th>
                <th class="p-3 text-start">Description</th>
                <th class="p-3 text-end">Price</th>
                <th class="p-3 text-center">Payment</th>
                <th class="p-3 text-end">Status</th>
                <th class="p-3 text-end">Actions</th>
            </tr>
        </thead>
        <tbody wire:poll>
            @foreach ($orders as $order)
            <tr class="text-gray-500 border-b border-gray-400 border-opacity-20 hover:bg-red-500 hover:text-white {{$loop->last ? 'border-none' : ''}}">
                <td class="p-3 whitespace-nowrap">{{ucwords($order->name)}}</td>
                <td class="p-3 text-start">{{$order->customer->name}}</td>
                <td class="max-w-lg p-3 text-start">{{$order->description}}</td>
                <td class="p-3 text-end">${{number_format($order->price, 2, '.', ' ')}}</td>
                <td class="p-3 text-center whitespace-nowrap">{{ $order->payment }}</td>
                <td class="p-3 text-end whitespace-nowrap"><span class="status {{ str_replace(' ', '-', (strtolower($order->status))) }}">{{ $order->status }}</span></td>
                <td class="p-3 text-right">
                    <span class="actions">
                        <button class="pt-1 pb-1 pl-2 pr-1 text-lg text-white bg-yellow-500 rounded-md leading-0" wire:click='$emit("openModal", "edit-customer" , {{ json_encode(["customerId" => $order->customer->id]) }})'>
                            <i class="far fa-edit"></i>
                        </button>
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>