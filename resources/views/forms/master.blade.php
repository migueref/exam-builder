@extends('layouts.app')
@section('title',$exam->name)
@section('content')

  <form class="container" action="/master" method="post">
    {{ csrf_field() }}
    <section id="generales">
      <article>
        <h1>Examen de admisión a la maestría</h1>
        <p>Debido al alto número de solicitudes de admisión, CIFE realiza una prueba en línea para conocer su perfil vocacional y dominio de la competencia comunicativa respecto a la redacción de textos. Esta prueba se divide en dos partes: diagnóstico vocacional
          y redacción y comprensión de textos académicos. En el proceso de admisión solo se tendrá en cuenta esto último, en complemento con la evaluación global del currículo vitae.</p>
      </article>
      <h2>PREGUNTAS DE DIAGNÓSTICO</h2>
      <p>Esta parte solo es de diagnóstico y no se tendrá en cuenta en la admisión. Sin embargo, es obligatorio complementar todos los puntos. No hay respuestas buenas ni malas. Es solo para orientarle mejor en el tipo de contenidos y actividades.</p>
      <h3>Datos de aplicante</h3>
      <div class="row">
        <div class="input-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="John">
            <small id="name" class="form-text text-muted">Escribe tu(s) nombre(s) aquí.</small>
          </div>
        </div>
        <div class="input-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="form-group">
            <label for="lastname">Apellido paterno</label>
            <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="lastname" placeholder="Doe">
            <small id="lastname" class="form-text text-muted">Escribe tu primer apellido aquí.</small>
          </div>
        </div>
        <div class="input-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="form-group">
            <label for="middlename">Apellido materno</label>
            <input type="text" class="form-control" name="middlename" id="middlename" aria-describedby="middlename" placeholder="Doe">
            <small id="middlename" class="form-text text-muted">Escribe tu segundo apellido aquí.</small>
          </div>
        </div>
        <div class="input-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="johndoe@ejemplo.com">
            <small id="email" class="form-text text-muted">Escribe tu dirección de email aquí.</small>
          </div>
        </div>
        <div class="input-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="form-group">
            <label for="city">Ciudad</label>
            <input type="text" class="form-control" name="city" id="city" aria-describedby="city" placeholder="Doe">
            <small id="city" class="form-text text-muted">Escribe tu ciudad.</small>
          </div>

        </div>
      </div>

    </section>
    <section id="preguntas">
      <div class="card col m12 padding-buttom">
        {{ $exam->name }}
        @foreach($exam->questions as $question)
          @if ($question->type==1)
            <div class="card-content wrap-text  ">

              @if ($question->id == 25 )
                <span class="card-title">Resumen de un texto. Lea por favor el siguiente artículo corto:
                   <a href="https://www.researchgate.net/publication/292760598_Editorial_Necesidad_de_un_nuevo_modelo_educativo_para_Latinoamerica" target="_blank">
                     "Hacia un nuevo modelo educativo en Latinoamérica"</a> y responda las siguientes preguntas:
                  <br>12. La idea principal del texto es:
                </span>
              @else
                <span class="card-title">{{ $question->name }}</span>
              @endif
              <div class="col s12">
                @foreach($question->options as $option)
                  <p>
                  <input type="radio" name="question{{$question->id}}" value="{!! $option->id !!}" />{{ $option->name }}
                  </p>
                @endforeach
              </div>

            </div>
          @else
            <div class="card-content wrap-text  ">
              <p><strong>EVALUACI&Oacute;N DEL DESEMPE&Ntilde;O EN TORNO A LA REDACCI&Oacute;N DE TEXTOS</strong></p>
              <p>11. Explique un problema que le gustar&iacute;a abordar en la maestr&iacute;a mediante un proyecto de aplicaci&oacute;n o de investigaci&oacute;n. Por ejemplo, podr&iacute;a plantear en qu&eacute; consiste el problema, cu&aacute;l es su relevancia, donde se presenta, qu&eacute; efectos tiene, cu&aacute;les son sus posibles causas y qu&eacute; aspectos no se han abordado, o no se han estudiado con claridad.</p>
              <p>Criterios:</p>
              <ol>
              <li>El texto debe tener entre 300 y 500 palabras.</li>
              <li>Se deben aplicar las normas de estilo y gramaticales de la lengua.</li>
              <li>Se deben citar al menos tres autores de manera real o simulada.</li>
              <li>El texto debe ser de tipo académico y en tercera persona.</li>
              <li>Al final, describa las referencias bibliogr&aacute;ficas citadas con todos sus elementos.</li>
              <li>Puede ser un &uacute;nico p&aacute;rrafo o tener varios p&aacute;rrafos.</li>
              <li>Colocarle un t&iacute;tulo acad&eacute;mico acorde con contenido.</li>
              </ol>
              <div class="col s12">
                <textarea class="ckeditor" name="question{{$question->id}}"></textarea>
              </div>

            </div>

          @endif

        @endforeach
        <div class="row">
          <div class="col-md-1 col-lg-1">

          </div>
          <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
            <input type="submit" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-success" value="Enviar">
          </div>
          <div class="col-md-1 col-lg-1">

          </div>
        </div>
      </div>

    </section>

  </form>


@endsection
