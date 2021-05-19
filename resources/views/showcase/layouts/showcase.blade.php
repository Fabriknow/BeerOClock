<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('showcase/css/app.css') }}">
    @livewireStyles
    <title>@yield('title')</title>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    @livewireScripts
    <script src="{{ asset('showcase/js/app.js') }}"></script>
    @livewireStyles
</head>
<body>
    @if (session()->has('message'))
      <div class="alert-red">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Info!</strong> <p>{{ session()->get('message') }}</p>
      </div>
    @endif

    <header>
        <div class="logo"></div>
        @yield('nav')
        <div class="slogan">@yield('slogan')</div>
    </header>
    
    @yield('content')
               
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v10.0" nonce="lb2R8GvR"></script>
  </body>
</html>