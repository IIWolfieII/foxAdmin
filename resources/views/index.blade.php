<x-layout currentRoute="{{ $currentRoute }}">

  <x-card-box :customers="$customers" :orders="$orders" />

  <div class="relative grid w-full px-1 py-5 mt-3 details">

    <livewire:recent-customers></livewire:recent-customers>

    <livewire:recent-orders></livewire:recent-orders>
  </div>
</x-layout>