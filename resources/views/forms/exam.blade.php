@extends('layouts.app')
@section('title',$exam->name)
@section('content')

  <form class="" action="master" method="post">
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
        <div class="input-field col s6 m6 l6">
          <input id="nombres" name="nombres" type="text" class="validate" required>
          <label for="nombres">Nombres</label>
        </div>
        <div class="input-field col s6 m6 l6">
          <input id="apaterno" name="apaterno" type="text" class="validate" required>
          <label for="apaterno">Apellido paterno</label>
        </div>
        <div class="input-field col s6 m6 l6">
          <input id="amaterno" name="amaterno" type="text" class="validate" required>
          <label for="amaterno">Apellido materno</label>
        </div>
        <div class="input-field col s6 m6 l6">
          <input id="email" name="email" type="text" class="validate" required>
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6 m6 l6">
          <input id="ciudad" name="ciudad" type="text" class="validate" required>
          <label for="ciudad">Ciudad</label>
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
                <span class="card-title">{{ $question->name }}</span>span>
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
                <textarea name="editor1"></textarea>
              </div>

            </div>

          @endif

        @endforeach

      </div>
      <input type="submit" class="btn btn-success" value="Enviar">
    </section>

  </form>


@endsection
