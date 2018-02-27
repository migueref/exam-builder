@extends("layouts.app")
@section("title","Listado de registros de doctorado")
@section('content')
  <div class="card">
    <h3>Total de registros: {{ $forms->count() }}</h3>
  </div>

    <table class="table table-responsive table-bordered">
      <thead class="thead-dark">
        <tr>
            @foreach($exam->questions as $question)
              @if ($question->id!=12)
                @if ($question->id==11)
                  <th scope="col">EVALUACIÓN DEL DESEMPEÑO EN TORNO A LA REDACCIÓN DE TEXTOS</th>
                @else
                  <th scope="col">{!! $question->name !!}</th>
                @endif
              @else
                  <th scope="col"><a  target="_blank" href="https://www.researchgate.net/publication/288671205_Sociedad_del_Conocimiento_Estudio_documental_desde_una_perspectiva_humanista_y_compleja">Resumen de un texto</a></th>

              @endif
            @endforeach
            <th>Creado</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($forms as $form)
          <tr>
            @foreach($form->answers as $answer)
              @if ($answer->question->type==1)
                <td>{{ $answer->option["name"] }}</td>
              @else

                <td>
                  <button type="button" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn btn-primary" data-toggle="modal" data-target="#{{ $form->id.$answer->id }}">  Ver ensayo</button>

                </td>
              @endif

              <!-- Modal -->

              <div class="modal fade" id="{{ $form->id.$answer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">11. Explique un problema que le gustaría abordar mediante un proyecto de investigación</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      {!! $answer->description !!}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            <td>{{ $answer->created_at }} </td>
          </tr>
        @endforeach
      </tbody>
    </table>


  <div class="row">
    {{ $forms->links() }}
  </div>
@endsection
