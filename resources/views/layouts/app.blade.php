<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>We Care</title>

  <!-- Bootstrap -->
  <link href="{{asset('css/appCSS/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/appCSS/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/appCSS/animate.css')}}">
  <link rel="stylesheet" href="{{ asset('css/appCSS/overwrite.css')}}">
  <link href="{{asset('css/appCSS/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/appCSS/style.css')}}" rel="stylesheet" />

</head>

<body>
  <header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <a class="navbar-brand" href="{{url('/')}}">We Care</a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#feature">Feature</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#pricing">Price & Plan</a></li>
            <li><a href="#our-team">Our Team</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#">Signup</a></li>
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->



  @yield('body')

  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{asset('js/appJS/jquery-2.1.1.min.js')}}"></script>
  <script src="{{asset('js/appJS/we-care.js')}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('js/appJS/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/appJS/parallax.min.js')}}"></script>
  <script src="{{asset('js/appJS/wow.min.js')}}"></script>
  <script src="{{asset('js/appJS/jquery.easing.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/appJS/fliplightbox.min.js')}}"></script>
  <script src="{{asset('js/appJS/functions.js')}}"></script>
  <script src="{{asset('js/appJS/contactform.js')}}"></script>

</body>

</html>
