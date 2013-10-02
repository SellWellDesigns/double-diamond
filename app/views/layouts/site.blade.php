<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Double Diamond</title>

    <link href="{{ asset('css/' . Input::get('season', 'winter') . '.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="{{ asset('img/header_logo.png') }}" alt="Double Diamond" />
          </a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li class="active">
              <a href="#">
                SHOP
              </a>
            </li>
            <li>
              <a href="#about">
                ABOUT
              </a>
            </li>
            <li>
              <a href="#contact">
                CONTACT 
              </a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </div>

    @yield('content')

    <footer class="section brand1-bg white">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 text-center">
            <i class="brand-patagonia"></i>
          </div>
          <div class="col-lg-2 col-md-2 text-center">
            <i class="brand-north-face"></i>
          </div>
          <div class="col-lg-2 col-md-2 text-center">
            <i class="brand-volkl"></i>
          </div>
          <div class="col-lg-2 col-md-2 text-center">
            <i class="brand-k2"></i>
          </div>
          <div class="col-lg-2 col-md-2 text-center">
            <i class="brand-nordica"></i>
          </div>
          <div class="col-lg-2 col-md-2 text-center">
            <i class="brand-blizzard"></i>
          </div>
        </div>

        <hr />

        <p class="pull-left">
          &copy; {{ date('Y') }} Double Diamond Vail
        </p>

        <ul id="social-links" class="pull-right list-inline">
          <li>
            <a href="#">
              <i class="icon-facebook"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="icon-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="icon-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="icon-pinterest"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="icon-youtube"></i>
            </a>
          </li>
        </ul>

      </div>
    </footer>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="{{ asset('js/actions.js') }}"></script>
  </body>
</html>