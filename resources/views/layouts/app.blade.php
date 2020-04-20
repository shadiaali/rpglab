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
      <a href="/"><img class="logo" src="images/rpgLabLogo.svg"></a>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
            <a class="nav-link" href="rules">Rules</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else

        <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/character">Character</a>
        </li>
        
        
        <li class="nav-item">
            <a class="nav-link" href="/awards">Awards</a>
        </li>
    
        <li class="nav-item">
            <a class="nav-link" href="/forums">World</a>
        </li>


        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                <a class="dropdown-item" href="/user/{{ Auth::user()->id }}/edit">Edit Author</a>
                <a class="dropdown-item" href="/users">View Authors Listing</a>

                @role('admin')

                <a class="dropdown-item" href="/addcategory">Add Category</a>
                <a class="dropdown-item" href="/roles">Roles</a>
                @endrole


                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
            </div>
        </li>




        <li class="ml-5 nav-item">
            <form action="{{route('user.update')}}" method = "post">
                @csrf
                <input type="hidden" name = "name" id = "name" class="form-control" required value = "{{ Auth::user()->name }}">
<div class="row d-flex justify-content-center">
    <div class="col-8"><select class="browser-default custom-select" name="character_id" required
        id="character_id">
        <option value="option_select" disabled selected>My Characters</option>
        @foreach(Auth::user()->characters as $character)
        <option value="{{ $character->id }}"
            {{Auth::user()->character_id == $character->id  ? 'selected' : ''}}>
            {{ $character->character_name}}</option>
        @endforeach
    </select></div>
<div class="col-4"><button type = "submit" class="btn btn-nav btn-md btn-primary">Play</button></div>
</div>
            
            
        </form>
        </li>

        @endguest </ul>
        
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