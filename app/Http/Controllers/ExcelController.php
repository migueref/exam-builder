<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class ExcelController extends Controller
{
  public function exportForms($id)
  {
    \Excel::create('formacion-continua-reporte', function($excel) {
      $forms = Form::all();
      $excel->sheet('Excel sheet', function($sheet) use($forms) {
        $sheet->row(1, [
          '1. Su principal interés para estudiar un doctorado en CIFE es:',
          '2. Mi desempeño académico en la maestría fue:',
          '3. Mi grado de responsabilidad para terminar trabajos y actividades académicas y profesionales en tiempo y forma, es:',
          '4. En el futuro, espero que con este doctorado pueda (señale la opción más valiosa para Usted):',
          '5. Si ingreso al doctorado, probablemente:',
          '6. Si ingreso al doctorado, probablemente:',
          '7. Deseo realizar un proceso de titulación en el doctorado con énfasis en: ',
          '8. Me interesa estudiar en el doctorado:',
          '9. Respecto a la redacción de un artículo, mi desempeño es:',
          '10. Mi desempeño en cursos virtuales o mediados por la tecnología es:',
          '11. EVALUACIÓN DEL DESEMPEÑO EN TORNO A LA REDACCIÓN DE TEXTOS',
          '12. Resumen de un texto',
          '13. Señale a continuación una idea que no se aborde en la Introducción. ',
          'Fecha de registro',

        ]);
        foreach($forms as $index => $form) {
            $sheet->row($index+2, [
              $form->firstname
              ,$form->middlename
              ,$form->lastname
              ,$form->city
            ]);
          }
      });
    })->export('xls');
  }
}
