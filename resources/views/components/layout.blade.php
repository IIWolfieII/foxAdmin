<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Sebby Klima">
  <meta name="description" content="Just another random website!">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  @livewireStyles()
  <title>Admin Panel</title>
</head>

<body class="min-h-full overflow-x-hidden">

  <div class="relative w-full">
    <x-navbar currentRoute="{{$currentRoute}}" />
    <main class="absolute px-3 py-0 transition-all duration-500 bg-leaf" style="min-height: 100vh;">
      <div class="flex items-center justify-between w-full h-16 topbar">
        <div class="relative top-0 flex items-center justify-center w-16 h-16 cursor-pointer toggle">
          <ion-icon class="text-red-500" name="menu-outline"></ion-icon>
        </div>

        <div class="relative mx-3 my-0 search">
          <label class="relative w-full bg-white">
            <input disabled class="w-full h-8 px-5 py-1 border border-gray-400 outline-none rounded-3xl pl-9" type="text" placeholder="Search here">
            <ion-icon class="absolute top-0 text-gray-400 left-3" name="search-outline"></ion-icon>
          </label>
        </div>

        <div class="relative w-12 h-12 overflow-hidden cursor-pointer user-img">
          <img class="absolute top-0 left-0 object-cover w-full h-full" src="user-icon.jpg" alt="">
        </div>
      </div>
      {{ $slot }}
    </main>
  </div>
  @livewire('livewire-ui-modal')
  @livewireScripts()

  <script defer>
    function $(selector) {
      return document.querySelector(selector);
    }

    function $all(selector) {
      return document.querySelectorAll(selector);
    }

    let toggle = $('.toggle');
    let navigation = $('nav');
    let main = $('main');

    toggle.onclick = function() {
      navigation.classList.toggle('active');
      main.classList.toggle('active');
    }

    /* let list = $all('nav li');

    function activeLink() {
      list.forEach((item) =>
        item.classList.remove('hovered'));
      this.classList.add('hovered');
    }
    list.forEach((item) => item.addEventListener('mouseover', activeLink)) */
  </script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>