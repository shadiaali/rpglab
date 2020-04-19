
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=GFS+Didot|PT+Sans&display=swap" rel="stylesheet">

        <style>

            html,
            body,
            header,
            .view {
              height: 100%;
            }
          
            @media (min-width: 320px) {
              html,
              body,
              header,
              .view {
                height: 100vh;
              }
            }
          
            .top-nav-collapse {
              background-color: #FFF !important;
            }
          
            .navbar:not(.top-nav-collapse) {
              background:#FFF !important;
            }
          
            @media (max-width: 991px) {
             .navbar:not(.top-nav-collapse) {
              background: #FFF !important;
             }
            }
            
            h1 {
              letter-spacing: 8px;
            }
          
            h5 {
              letter-spacing: 3px;
            }
          
            .hr-light {
              border-top: 3px solid #fff;
              width: 80px;
            }
            html, body {
font-size: 14px;
}

h1 {
font-family: PT Sans;
font-size: 7.62939453125em;
font-style: normal;
font-weight: 700;
letter-spacing: 0em;
line-height: 9.899999999999999rem;
margin-bottom: 3.3rem;
}

h2 {
font-family: PT Sans;
font-size: 6.103515625em;
font-style: normal;
font-weight: 700;
letter-spacing: 0em;
line-height: 6.6rem;
margin-bottom: 3.3rem;
}

h3 {
font-family: PT Sans;
font-size: 4.8828125em;
font-style: normal;
font-weight: 700;
letter-spacing: 0em;
line-height: 6.6rem;
margin-bottom: 3.3rem;
}

h4 {
font-family: PT Sans;
font-size: 3.90625em;
font-style: normal;
font-weight: 700;
letter-spacing: 0em;
line-height: 6.6rem;
margin-bottom: 3.3rem;
}

h5 {
font-family: PT Sans;
font-size: 3.125em;
font-style: normal;
font-weight: 700;
letter-spacing: 0em;
line-height: 3.3rem;
margin-bottom: 3.3rem;
}

h6 {
font-family: PT Sans;
font-size: 2.5em;
font-style: normal;
font-weight: 700;
letter-spacing: 0em;
line-height: 3.3rem;
margin-bottom: 3.3rem;
}

p {
font-family: GFS Didot;
font-size: 2em;
font-style: normal;
font-weight: 400;
letter-spacing: 0em;
line-height: 3.3rem;
margin-bottom: 3.3rem;
}

default {
font-size: 1.6em;
line-height: 3.3rem;
}

@media screen and (max-width: 720px) {
default {
font-size: 1.6em;
line-height: 2.5rem;
}
h1 {
font-family: PT Sans;
font-size: 6.103515625em;
font-style: normal;
font-weight: 700;
letter-spacing: 0em;
line-height: 7.5rem;
margin-bottom: 2.5rem;
}
h2 {
font-family: PT Sans;
font-size: 4.8828125em;
font-style: normal;
font-weight: 700;
letter-spacing: 0em;
line-height: 5rem;
margin-bottom: 2.5rem;
}
h3 {
font-family: PT Sans;
font-size: 3.90625em;
font-style: normal;
font-weight: 700;
letter-spacing: 0em;
line-height: 5rem;
margin-bottom: 2.5rem;
}
h4 {
font-family: PT Sans;
font-size: 3.125em;
font-style: normal;
font-weight: 700;
letter-spacing: 0em;
line-height: 5rem;
margin-bottom: 2.5rem;
}
h5 {
font-family: PT Sans;
font-size: 2.5em;
font-style: normal;
font-weight: 700;
letter-spacing: 0em;
line-height: 2.5rem;
margin-bottom: 2.5rem;
}
h6 {
font-family: PT Sans;
font-size: 2em;
font-style: normal;
font-weight: 700;
letter-spacing: 0em;
line-height: 2.5rem;
margin-bottom: 2.5rem;
}
p {
font-family: GFS Didot;
font-size: 2em;
font-style: normal;
font-weight: 400;
letter-spacing: 0em;
line-height: 2.5rem;
margin-bottom: 2.5rem;
}
}
a {
    color:#5E6774 !important;
    font-weight: 100;
}

a:hover {
    background-color: #FCF797;
    border-radius:10px;
}
          </style>
          
          <!-- Main navigation -->
        
    </head>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top scrolling-navbar ">
    <div class="container-fluid">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/rpgLabLogo.svg" style="width:9em;"></a>
      
      <div class="collapse navbar-collapse text-center" id="navbarSupportedContent-7">
        <ul class="navbar-nav ml-auto h4">
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

<header>
    <body>

<!-- Full Page Intro -->
<div class="view jarallax" style="background-image: url('images/rpglab_bg.png'); background-repeat: no-repeat; background-size: cover; background-position: bottom center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-white-light d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="mt-5 col-12 mb-4 white-text text-center">
            <center><img class="mt-5" style="max-width:35%;" src="images/rpglab_logo_png.png"></center>
            
            <h6 class="mb-4 text-black-50 wow fadeInDown" data-wow-delay="0.4s"><strong>A Play-by-Post RPG Creator</strong></h6>
            
            <p class="text-black-50 text-left">rpgLab is a web platform based on online forum play-by-post role-playing games - but customized to fit the needs of the game master and the game.</p>
            
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
    </body>
</html>
