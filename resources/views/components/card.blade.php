@props(['data', 'icon'])
<div class="relative flex justify-between bg-white rounded-3xl p-7 card hover:bg-red-500">
  <div>
    <div class="relative font-bold data">{{ $data }}</div>
    <div class="mt-1 text-gray-400 card-name">{{ $slot }}</div>
  </div>
  <div class="text-gray-400 icon-box">
    <ion-icon name="{{ $icon }}"></ion-icon>
  </div>
</div>