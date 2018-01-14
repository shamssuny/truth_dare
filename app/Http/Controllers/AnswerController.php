<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Answer;

use App\Question;

use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function ans($id){
      $this->validate(request(),[
        'ans' => 'required'
      ]);

      $an = new Answer;
      $an->ans = request('ans');
      $an->user_id = Auth::id();
      $an->question_id = $id;
      $an->save();

      $q = Question::find($id);
      $q->answered = "yes";
      $q->save();

      return redirect('/questions')->with('msg','Answered Successfull!!');

    }
}
