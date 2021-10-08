@props(['customers', 'orders'])
<div class="relative grid w-full gap-3 p-1 card-box">
  <x-card data="{{ (null === $customers) ? $customers->count() : 'Empty' }}" icon="people-outline">
    Customer Count
  </x-card>
  <x-card data="{{ (null === $customers) ? $customers[0]->name : 'Empty' }}" icon="person-outline">
    Latest Customer
  </x-card>
  <x-card data="{{ (null === $orders) ? $orders->count() : 'Empty'}}" icon="cart-outline">
    Orders
  </x-card>
  <x-card data="${{ (null === $orders) ? number_format($orders->where('payment', 'Paid')->pluck(['price'])->sum(), 2, '.', ' ') : 'Empty'}}" icon="cash-outline">
    Earning
  </x-card>
</div>