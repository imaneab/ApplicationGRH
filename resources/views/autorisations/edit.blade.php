@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier les informations d'une autorisation</div>

                <div class="panel-body">
               {!! Form::model($autorisation,array('route'=>['autorisation.update',$autorisation->id],'method'=>'PUT')) !!}
               <div class="form-group">
               {!! Form::label('numero de badge','Entrez le numero de badge') !!}
               {!! Form::text('badgenumber',null,['class'=>'form-control']) !!}

              </div>
              <div class="form-group">
               {!! Form::label('nombre du jours','Entrez le nombre du jours') !!}
               {!! Form::text('nombre_jours',null,['class'=>'form-control']) !!}

              </div>
              

                  <div class="form-group">
               {!! Form::label('date de debut','Entrez la date de debut') !!}
               {!! Form::date('date_debut',null,['class'=>'form-control']) !!}

              </div>
              
             

              <div class="form-group">
               {!! Form::label('date de retour','Entrez la date de retour') !!}
               {!! Form::date('date_retour',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Moyen de transport','Entrez le moyen de transport') !!}
               {!! Form::text('moyen_transport',null,['class'=>'form-control']) !!}

              </div>
              <div class="form-group">
               {!! Form::label('Endroit de mission','Entrez l endroit de mission') !!}
               {!! Form::text('endroit_mission',null,['class'=>'form-control']) !!}

              </div>

              
              <div class="form-group">
              {!! Form::button('Modifier',['type'=>'submit','class'=>'btn btn-primary']) !!}
              </div>
               {!! Form::close() !!}
                </div>
            </div>
           @if($errors->has())
           <ul class="aler alert-danger">
           @foreach($errors->all() as $error)
           <li>{{ $error }}</li>
           @endforeach
           </ul>
           @endif
        </div>
    </div>
</div>
@endsection
