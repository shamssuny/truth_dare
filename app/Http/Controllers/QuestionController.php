<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\User;

use App\Question;

class QuestionController extends Controller
{
    public function show(){
      $getid = Auth::id();
      $getauthQuestion = Question::where('user_id',$getid)->orderBy('id','DESC')->paginate(10);
      //$getans = getauthQuestion->answers;
      return view('loggeduserquestions',compact('getauthQuestion'));
    }

    public function showUserProfile($id){
      $getuser = User::find($id);
      $getquestions = Question::where('user_id','=',$id)->paginate(10);
      return view('showuserprofile',compact('getuser','getquestions'));
    }

    public function createview($id){
      $uid = $id;
      return view('createquestion',compact('uid'));
    }

    public function create($id){
      $this->validate(request(),[
        'question' => 'required|min:10'
      ]);

      $add = new Question;
      $add->ques = request('question');
      $add->user_id = $id;
      $add->answered = "no";
      $add->save();
      return redirect('/profile/'.$id)->with('status','Question Added Sucessfully!');
    }
}
