<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login/Signup</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
  <meta name="robots" content="noindex">

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="{{ asset(null) }}assets/css/style.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

</head>

<body class="login">

  @yield('content')
  
  <!-- jQuery -->
  <script src="{{ asset(null) }}assets/vendor/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="{{ asset(null) }}assets/vendor/tether.min.js"></script>
  <script src="{{ asset(null) }}assets/vendor/bootstrap.min.js"></script>

  <!-- AdminPlus -->
  <script src="{{ asset(null) }}assets/vendor/adminplus.js"></script>

  <!-- App JS -->
  <script src="{{ asset(null) }}assets/js/main.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
  @yield('script')
  </body>
</html>