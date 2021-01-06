@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier les informations d'un congé</div>

                <div class="panel-body">
               {!! Form::model($conge,array('route'=>['conge.update',$conge->id],'method'=>'PUT')) !!}
               <div class="form-group">
               {!! Form::label('ID de fonctionnaire','Entrez l ID de fonctionnaire') !!}
               {!! Form::text('fonctionnaires_id',null,['class'=>'form-control']) !!}

              </div>
              <div class="form-group">
               {!! Form::label('Type de congé','Entrez le Type de congé') !!}
               {!! Form::select('type_conge',array('annuel' => 'annuel','maternité'=> 'maternité','maladie'=> 'maladie'), null,array('class' => 'form-control')) !!}

              </div>
              <div class="form-group">
               {!! Form::label('Nombre de jours','Entrez le Nombre de jours') !!}
               {!! Form::text('nombre_jours',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Nombre de jours consomés','Entrez le Nombre de jours consomés') !!}
               {!! Form::text('nombre_jours_consomes',null,['class'=>'form-control']) !!}

              </div>

                  <div class="form-group">
               {!! Form::label('Nombre de jours restants','Entrez le Nombre de jours restants') !!}
               {!! Form::text('nombre_jours_restants',null,['class'=>'form-control']) !!}

              </div>
              
              <div class="form-group">
               {!! Form::label('Date de début','Entrez la Date de début') !!}
               {!! Form::text('date_debut',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Date de fin','Entrez la Date de fin') !!}
               {!! Form::text('date_fin',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Date de retour','Entrez la Date de retour') !!}
               {!! Form::text('date_retour',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Remarque','Entrez une Remarque') !!}
               {!! Form::text('remarque',null,['class'=>'form-control']) !!}

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
