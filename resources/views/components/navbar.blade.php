@props(['currentRoute'])
<nav class="fixed h-full overflow-hidden text-white transition-all duration-500 ease-in-out bg-red-500 border-0 border-l-8 border-red-500 w-52">
  <ul class="absolute top-0 left-0 w-full">
    <li class="relative mb-10 list-none pointer-events-none w-100 hover:bg-white hover:text-red-500">
      <x-dashboard-link brand="true" href="" icon="logo-gitlab">foxAdmin</x-dashboard-link>
    </li>
    <li class="relative list-none rounded-l-3xl w-200 hover:bg-white hover:text-red-500 {{ $currentRoute === '/dashboard' ? 'active' : ''}}">
      <x-dashboard-link href="/" icon="home-outline">Dashboard</x-dashboard-link>
    </li>
    <li class="relative list-none rounded-l-3xl w-200 hover:bg-white hover:text-red-500 {{ $currentRoute === '/customers' ? 'active':'' }}">
      <x-dashboard-link href="/customers" icon="people-outline">Customers</x-dashboard-link>
    </li>
    <li class="relative list-none rounded-l-3xl w-200 hover:bg-white hover:text-red-500 {{ $currentRoute === '/orders' ? 'active' : ''}}">
      <x-dashboard-link href="/orders" icon="chatbubble-outline">Orders</x-dashboard-link>
    </li>
    {{--<li class="relative list-none rounded-l-3xl w-200 hover:bg-white hover:text-red-500">
    <x-dashboard-link icon="log-out-outline">Sign Out</x-dashboard-link>
    </li>--}}
  </ul>
</nav>