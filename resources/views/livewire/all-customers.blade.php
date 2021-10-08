<div class="relative grid p-5 m-2 bg-white all-customers rounded-3xl">
    <div class="flex items-start justify-between card-header">
        <h2 class="text-2xl font-bold text-red-500">All Customers</h2>
        <button class="relative py-1 pl-3 pr-2 text-white bg-green-500 rounded-md button" wire:click='$emit("openModal", "add-customer")'>
            <i class="fas fa-user-plus"></i>
        </button>
    </div>
    <table class="w-full mt-3 border-collapse">
        <thead class="font-bold">
            <tr class="text-gray-500 border-b border-gray-400 border-solid border-opacity-20">
                <th class="p-3 text-start">ID</th>
                <th class="p-3 text-start">Name</th>
                <th class="p-3 text-start">Email</th>
                <th class="p-3 text-start">Phone Number</th>
                <th class="p-3 text-end">Actions</th>
            </tr>
        </thead>
        <tbody wire:poll>
            @foreach ($customers as $customer)
            <tr class="text-gray-500 border-b border-gray-400 border-opacity-20 hover:bg-red-500 hover:text-white {{$loop->last ? 'border-none' : ''}}">
                <td class="p-3 text-start">{{$customer->id}}</td>
                <td class="p-3">{{$customer->name}}</td>
                <td class="p-3 text-start">{{$customer->email}}</td>
                <td class="p-3 text-start">{{ $customer->phone_number }}</td>
                <td class="p-3 text-right">
                    <span class="actions">
                        <button class="pt-1 pb-1 pl-2 pr-1 text-lg text-white bg-yellow-500 rounded-md leading-0" wire:click='$emit("openModal", "edit-customer" , {{ json_encode(["customerId" => $customer->id]) }})'>
                            <i class="far fa-edit"></i>
                        </button>

                        {{--<button class="px-1 pt-1 text-lg text-white bg-red-700 rounded-md leading-0">
                      <ion-icon name="person-remove-outline"></ion-icon>
                    </button>--}}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>