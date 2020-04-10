<html>

<head>
  @yield('title')
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('app/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('app/css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('app/css/register.css') }}">
  <link rel="stylesheet" href="{{ asset('app/css/apply.css') }}">
  <link rel="stylesheet" href="{{ asset('app/css/about.css') }}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body style="height:150%;">

  <div class="container text-center" id="top-nav">
    <img
      src="https://static.wixstatic.com/media/fed336_b7df5c17b0064c5a92b651669b1bea78~mv2.png/v1/crop/x_344,y_123,w_940,h_421/fill/w_359,h_160,al_c,q_85,usm_0.66_1.00_0.01/fed336_b7df5c17b0064c5a92b651669b1bea78~mv2.webp">
    <hr>
    <ul>
      <li><a href="{{ url('/') }}" @yield('is-active-home')>Home</a></li>
      <li><a href="{{ url('/register') }}" @yield('is-active-reg')>Register</a></li>
      <li><a href="{{ url('/apply') }}" @yield('is-active-apply')>Apply</a></li>
      <li><a href="{{ url('/about') }}" @yield('is-active-about')>About</a></li>
    </ul>
  </div>

  <div id="main-content" style="display:none;">
      @yield('content')
    

    <div class="text-center" id="footer">
      <br><br>
      <a href="https://www.facebook.com/JobiTaxTime/" style="color:black;"><span class="fa fa-facebook"></span></a>
      <br><br>
      <br><br>
      <p>©2020 by Jobi Tax. </p>
      <br>
    </div>
  </div>

</body>

<script>
  $(document).ready(function(){
    $("#main-content").delay(10).fadeIn(1000)
  });
</script>
<script src="{{ asset('app/js/register.js') }}" type="text/javascript"></script>
<script src="{{ asset('app/js/apply.js') }}" type="text/javascript"></script>

</html>