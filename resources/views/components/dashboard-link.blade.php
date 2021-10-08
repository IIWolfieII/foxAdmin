@props(['icon' => '', 'brand' => false, 'href' => '/'])
<a {{$attributes->merge(['href' => $href])}} class="relative flex w-full no-underline curve-outside {{ $brand ? 'brand' : '' }}">
  <span class="relative block w-16 h-16 text-center leading-70">
    <ion-icon class="text-dashboard" name="{{ $icon }}"></ion-icon>
  </span>
  <span class="link-text relative block w-16 h-16 px-3 py-0 {{ $brand ? 'text-3xl transform -translate-x-5' : ''}} text-start whitespace-nowrap leading-60">{{ $slot }}</span>
</a>