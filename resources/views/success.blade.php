@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Conges</div>

                <div class="panel-body">
               {!! Form::open(array('route'=>'conge.store'))!!}
               <div class="form-group">
               {!! Form::label('type du conge','Entrez le 'type du conge'') !!}
               {!! Form::text('type_conge',null,['class'=>'form-control']) !!}

              </div>
              <div class="form-group">
               {!! Form::label('nombre du jours','Entrez le nombre du jours') !!}
               {!! Form::text('nombre_jours',null,['class'=>'form-control']) !!}

              </div>
              <div class="form-group">
               {!! Form::label('nombre_jours_consomes :') !!}
               {!! Form::text('nombre_jours_consomes',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('nombre_jours_restants : ') !!}
               {!! Form::text('nombre_jours_restants',null,['class'=>'form-control']) !!}

              </div>

                  <div class="form-group">
               {!! Form::label('date de debut','Entrez la date de debut') !!}
               {!! Form::date('date_debut',null,['class'=>'form-control']) !!}

              </div>
              
              <div class="form-group">
               {!! Form::label('date de fin','Entrez la date de fin') !!}
               {!! Form::date('date_fin',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('date de retour','Entrez la date de retour') !!}
               {!! Form::date('date_retour',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('remarque','Entrez une remarque') !!}
               {!! Form::text('remarque',null,['class'=>'form-control']) !!}

              </div>

              
              <div class="form-group">
              {!! Form::button('Ajouter',['type'=>'submit','class'=>'btn btn-primary']) !!}
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