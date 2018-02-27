<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\Exam;

class ExcelController extends Controller
{

  public function exportForms($id)
  {
      $registers = $this->getFormAnswers($id);
      $questions = $this->getExamQuestions($id);
      \Excel::create('Registros-examen', function($excel) use($registers,$questions) {
          $excel->sheet('Sheetname', function($sheet) use($registers,$questions) {
              $sheet->fromArray($registers,null,'A2',false,false)->prependRow($questions);
          });
      })->export('xls');
  }

  public function getFormAnswers($id)
  {
      $forms = Form::where('exam_id',$id)->get();
      $registers =array();
      foreach($forms as $form) {
          $data = array();
          foreach($form->answers as $answer) {
              if ($answer->question->type == 1) {
                $option = $answer->option["name"];
                array_push($data, $option);
              } else {

                array_push($data, strip_tags($answer->description));
              }
          }
          array_push($registers, $data);
      }
      return $registers;
  }

  public function getExamQuestions($id)
  {
      $exam = Exam::find($id);
      $questions = array();
      foreach ($exam->questions as $question) {
        array_push($questions, strip_tags($question->name));
      }
      return $questions;
  }

}
