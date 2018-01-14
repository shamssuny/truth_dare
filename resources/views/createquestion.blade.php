@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-body">


            <h3>Create A Question</h3>
            @if($errors->has('question'))
              @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
              @endforeach
            @endif
            <form class="form-group" action="/profile/{{ $uid }}/create" method="post">
              {{ csrf_field() }}
              <textarea name="question" rows="8" class="form-control"></textarea>
              <br>
              <input class="btn btn-success" type="submit" name="submit" value="Add Question">

            </form>


          </div>
        </div>
      </div>
  </div>

</div>

@endsection
