<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('head')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>rpgLab</title>

    <!-- Scripts -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">

</head>

<body>
    <div id="app">
        
        <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light sticky-top scrolling-navbar ">
    <div class="container-fluid">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="#"><img class="logo" src="images/rpgLabLogo.svg"></a>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="rules">Rules</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gameinfo">Game Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="characterclasses">Character Classes</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/home') }}">Home</a>
          </li>
          @else

          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          @endif
            @endauth
    @endif
        </ul>
        
      </div>
      
    </div>
  </nav>
  <!-- Navbar -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')


<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
</body>

</html>