@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-body">


            <div class="main-question col-md-12">

              @if(session('msg'))
              <div class="alert alert-success text-center">
                {{ session('msg') }}
              </div>
              @endif
              <h2 class="text-center">All Questions</h2>
              @foreach($getauthQuestion as $question)
              <div class="question col-md-12">
                <h3>{{ $question->ques }}</h3>

                @if($errors->has('ans'))
                  <p class="alert alert-danger">Invalid Input!</p>
                @endif

                @if($question->answered == "no")
                <form class="form-group" action="/questions/{{ $question->id }}" method="post">
                  {{ csrf_field() }}
                  <textarea placeholder="Remember You Can Answer Only One Time. So make it Exact" name="ans" class="form-control"></textarea><br>
                  <input type="submit" name="submit" value="Answer" class="btn btn-primary">
                </form>
                @else
                <p class="alert alert-warning">Answered: {{ $question->answers->ans }}</p>
                @endif
                <hr>
              </div>
              
              @endforeach


              {{ $getauthQuestion->links() }}

            </div>


          </div>
        </div>
      </div>
  </div>

</div>

@endsection
