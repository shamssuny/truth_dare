@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                  @if(Auth::check())
                    <h3 class="text-center">Welcome back!</h3>
                    <hr>
                    <div class="main-content ">

                      <div class="content-left col-md-6">
                        <p>See Your Questions!</p>
                        <a class="btn btn-success" href="/questions">View Your Questions!</a>
                      </div>

                      <div class="content-right col-md-6 form-group">
                        <p>Share this link to get Questions from friends!</p>
                        <input class="form-control" type="text" name="" value="{{ $_SERVER['SERVER_NAME'] }}/profile/{{ Auth::id() }}">
                      </div>

                    </div>

                  @else
                    <h2>Welcome to Truth Dare.</h2>
                    <p>You can share your profile with friends and get questions from them. And then you need to answer it publicallly. So prove yourself by register NOW!!</p>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
