<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exam;
use App\Form;
use App\Question;
use App\Answer;
class MasterController extends Controller
{

    public function index()
    {
      $forms = Form::where('exam_id',2)->orderBy('created_at','desc')->paginate(10);

        $exam = Exam::find(2);

        return view('forms.admin.master',['forms'=>$forms,'exam'=>$exam]);
    }

    public function create()
    {
        $exam = Exam::find(2);
        return view('forms.master',['exam'=>$exam]);
    }

    public function store(Request $request)
    {
        $form = new Form;
        $form->firstname = $request->name;
        $form->middlename = $request->middlename;
        $form->lastname = $request->lastname;
        $form->email = $request->email;
        $form->city = $request->city;
        $form->exam_id = 2;
        if ($form->save()) {
          if ($this->storeAnswers($request,$form->id)) {
            return view("forms.success");
          } else {
            Form::destroy($form->id);
            return view("forms.master");
          }
        }
    }

    public function storeAnswers($request,$form_id)
    {
        $exam = Exam::find(2);
        foreach ($exam->questions as $question) {
          $answer = new Answer;
          $answer->question_id = $question->id;
          if (($question->type==1)) {
            $answer->option_id = $request->{"question".$question->id} ;
          } else {
            $answer->description = $request->{"question".$question->id} ;
          }
          $answer->form_id = $form_id;
          if (! $answer->save()) {
            return false;
          }
        }
        return true;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
