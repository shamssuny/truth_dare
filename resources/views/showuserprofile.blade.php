@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="header col-md-12">

              @if(session('status'))
              <div class="alert alert-success text-center">
                {{ session('status') }}
              </div>
              @endif

              <h3>Add Truth Dare Question to <b>{{ $getuser->name }}</b></h3>
              <a href="/profile/{{ $getuser->id }}/create">Add A New Question</a>
              <hr>
                <p class="text-center">All Questions</p>
              <hr>
            </div>


            <div class="allquestions col-md-12">
              <?php $i=1; ?>
              @foreach($getquestions as $questions)
              <div class="question-body col-md-12">
                <h3>{{ $i }}| {{ $questions->ques }}</h3>
                @if($questions->answered == "no")
                <p style="color:coral">Not Answered Yet</p>
                @else
                <p> <span style="color:blue;"><b>Answer: </b></span> {{ $questions->answers->ans }} </p>
                @endif

                <?php $i++; ?>
              </div>
              @endforeach

              {{ $getquestions->links() }}


            </div>


          </div>
        </div>
      </div>
  </div>

</div>

@endsection
