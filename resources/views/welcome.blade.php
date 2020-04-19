
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
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
              background-color: #78909c !important;
            }
          
            .navbar:not(.top-nav-collapse) {
              background: transparent !important;
            }
          
            @media (max-width: 991px) {
             .navbar:not(.top-nav-collapse) {
              background: #78909c !important;
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
          
          </style>
          
          <!-- Main navigation -->
        
    </head>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/rpgLabLogo.svg" style="width:9em;"></a>
      
      <div class="collapse navbar-collapse text-center" id="navbarSupportedContent-7">
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

<header>
    <body>

<!-- Full Page Intro -->
<div class="view jarallax" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-12 mb-4 white-text text-center">
            <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
              data-wow-delay="0.3s"><strong>RpgLab</strong></h1>
            <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
            <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>A Play-by-Post RPG Creator</strong></h5>
            <h5>rpgLab is a web platform based on online forum play-by-post role-playing games - but customized to fit the needs of the game master and the game.</h5>
            <a href="http://shadiaali.ca" target="_blank" class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">My Portfolio</a>
            <a href="http://shadiaali.ca/thesis" target="_blank" class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Thesis Mini-Site</a>
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
