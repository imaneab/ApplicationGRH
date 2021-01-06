
@extends('layouts.app')

@section('content')
  {!! Form::model($conge,array('route'=>['conge.update',$conge->id],'method'=>'PUT')) !!}
<div class="form-group">

{!! Form::text('situation',1,['class'=>'form-control']) !!}

</div>
<div class="form-group">
{!! Form::button('Modifier',['type'=>'submit','class'=>'btn btn-primary']) !!}
              </div>

{!! Form::close() !!}
@if($errors->has())
           <ul class="aler alert-danger">
           @foreach($errors->all() as $error)
           <li>{{ $error }}</li>
           @endforeach
           </ul>
           @endif
@endsection