<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css">
    <link href="https://www..edu.mx/favicon.png" type="image/x-icon" rel="shortcut icon">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <!-- Adding CKEDITOR -->
    <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
  </head>

  <body>
    <header>
      <div class="navbar-fixed">
        <nav class="navbar-fixed blue-grey darken-4 white-text fixed" role="navigation">
          <div class="nav-wrapper container">
            <a href="https://www..edu.mx/exam/index.php/main/" class="button-collapse"><i class="material-icons">menu</i></a>
            <a id="logo-container" href="//.edu.mx" style="color:black;" class="brand-logo"><b><h5 class="white-text middle-xs">Centro Universitario </h5></b></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="{{ url('/') }}" style="color:white;">Exámenes</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- //services -->
    <main>
      @yield("content")
    </main>
    @include("layouts.partials.footer") @include("layouts.partials.scripts")
  </body>

</html>
