<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css">
  <link href="https://www..edu.mx/favicon.png" type="image/x-icon" rel="shortcut icon">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Examen de admisión</title>
  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <!-- Adding CKEDITOR -->
  <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
</head>

<body class="blue-grey lighten-5">
  <header>
    <div class="navbar-fixed">
      <nav class="navbar-fixed blue-grey darken-4 white-text fixed" role="navigation">
        <div class="nav-wrapper container">
          <a href="https://www..edu.mx/exam/index.php/main/" class="button-collapse"><i class="material-icons">menu</i></a>

          <a id="logo-container" href="//.edu.mx" style="color:black;" class="brand-logo"><b><h5 class="white-text middle-xs">Centro Universitario </h5></b></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="https://www..edu.mx/exam/index.php/main/" style="color:white;">Exámenes</a></li>
          </ul>


        </div>
      </nav>
    </div>
  </header>
  <!-- Examen doctorado -->
  <main class="row">
    <div class=" col m2"></div>
    <article class="card small-padding col s12 m4">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="https://www.colegiozamora.edu.mx/wp-content/uploads/2012/08/examen-en-EE-EE.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">EXAMEN DE ADMISIÓN AL DOCTORADO  <i class="material-icons right">more_vert</i></span>
        <p><a href="send/1">Ir al examen</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Estimado Postulante<i class="material-icons right">close</i></span>
        <br>
        <b>EXAMEN DE ADMISIÓN AL DOCTORADO  </b>
        <p>
          Debido al alto número de solicitudes de admisión,  realiza una prueba en línea para conocer su perfil vocacional y dominio de la competencia comunicativa respecto a la redacción y comprensión de textos. Esta prueba se divide en dos partes: diagnóstico
          vocacional y análisis de redacción y comprensión de textos académicos. En el proceso de admisión solo se tendrá en cuenta esto último, en complemento con la evaluación global del currículum vitae y publicaciones. </p>
      </div>
    </article>
    <article class="card small-padding col s12 m4">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="https://www.colegiozamora.edu.mx/wp-content/uploads/2012/08/examen-en-EE-EE.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">EXAMEN DE ADMISIÓN A LA MAESTRÍA<i class="material-icons right">more_vert</i></span>
        <p><a href="send/2">Ir al examen</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Estimado Postulante<i class="material-icons right">close</i></span>
        <br>
        <b>EXAMEN DE ADMISIÓN A LA MAESTRÍA</b>
        <p>
          Debido al alto número de solicitudes de admisión,  realiza una prueba en línea para conocer su perfil vocacional y dominio de la competencia comunicativa respecto a la redacción de textos. Esta prueba se divide en dos partes: diagnóstico vocacional
          y redacción y comprensión de textos académicos. En el proceso de admisión solo se tendrá en cuenta esto último, en complemento con la evaluación global del currículo vitae. </p>
      </div>
    </article>
    <div class=" col m2"></div>
  </main>
  @include("layouts.partials.footer")
  <script>
    $(document).ready(function() {
      $('select').material_select();

    });
  </script>
</body>

</html>
