@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">voir :</div>

                <div class="panel-body">
                  @foreach($user as $users)
                  <img src=" {{$users->nom}}" alt="" width="150" height="150">
                  <br/>
                 
                  @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection