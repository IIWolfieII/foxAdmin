<div class="relative grid p-5 bg-white recent-orders rounded-3xl">
    <div class="flex items-start justify-between card-header max-h-0">
        <h2 class="text-2xl font-bold text-red-500">Recent Orders</h2>
        <a class="relative px-3 py-1 text-white bg-red-500 rounded-md button" href="/orders">View All</a>
    </div>
    <table class="w-full mt-2 border-collapse">
        <thead class="font-bold">
            <tr class="text-gray-500 border-b border-gray-400 border-solid border-opacity-20">
                <th class="p-3 text-start">Project</th>
                <th class="p-3 text-end">Price</th>
                <th class="p-3 text-center">Payment</th>
                <th class="p-3 text-end">Status</th>
            </tr>
        </thead>
        <tbody wire:poll>
            @php
            $top12 = $orders->sortByDesc('created_at')->take(12);
            @endphp

            @foreach ($top12 as $order)
            <tr class="text-gray-500 border-b border-gray-400 border-opacity-20 hover:bg-red-500 hover:text-white {{$loop->last ? 'border-none' : ''}}">
                <td class="p-3">{{ucwords($order->name)}}</td>
                <td class="p-3 text-end">${{number_format($order->price, 2, '.', ' ')}}</td>
                <td class="p-3 text-center">{{ $order->payment }}</td>
                <td class="p-3 text-end"><span class="status {{ str_replace(' ', '-', (strtolower($order->status))) }}">{{ $order->status }}</span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>