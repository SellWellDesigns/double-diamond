<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ isset($description) ? $description : '' }}">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>{{ isset($title) ? $title : 'Double Diamond' }}</title>

    <link href="{{ asset('css/' . Input::get('season', 'winter') . '.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/datepicker/css/datepicker.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--[if lt IE 9]>
    <body class="old-ie">
  <![endif]-->
  <!--[if gt IE 9]>
    <body>
  <![endif]-->

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('img/header_logo.png') }}" alt="Double Diamond" />
          </a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li class="active">
              <a href="{{ route('rentals') }}">
                RENTALS
              </a>
            </li>
            <li>
              <a href="{{ route('about') }}">
                ABOUT
              </a>
            </li>
            <li>
              <a href="{{ route('contact') }}">
                 (970) 476-5500 
              </a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </div>

    @yield('content')

    @include('layouts/_footer')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="{{ asset('js/actions.js') }}"></script>

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-36995910-1', 'doublediamondvail.com');
    ga('send', 'pageview');
    </script>
  </body>
</html>