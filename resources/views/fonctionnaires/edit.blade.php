@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier les informations d'un fonctionnaire</div>

                <div class="panel-body">
               {!! Form::model($fonctionnaire,array('route'=>['fonctionnaire.update',$fonctionnaire->id],'method'=>'PUT')) !!}
               <div class="form-group">
               {!! Form::label('Numero de badge','Entrez le numéro de badge') !!}
               {!! Form::text('badgenumber',null,['class'=>'form-control']) !!}

              </div>
              <div class="form-group">
               {!! Form::label('Nom','Entrez le nom') !!}
               {!! Form::text('nom',null,['class'=>'form-control']) !!}

              </div>
              <div class="form-group">
               {!! Form::label('Prenom','Entrez le prénom') !!}
               {!! Form::text('prenom',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Fonction','Entrez la fonction') !!}
               {!! Form::text('fonction',null,['class'=>'form-control']) !!}

              </div>

                  <div class="form-group">
               {!! Form::label('Division','Entrez la division') !!}
               {!! Form::text('division',null,['class'=>'form-control']) !!}

              </div>
              
              <div class="form-group">
               {!! Form::label('Genre','Entrez le genre') !!}
               {!! Form::text('genre',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('CIN','Entrez le CIN') !!}
               {!! Form::text('CIN',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Service','Entrez le service') !!}
               {!! Form::text('service',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Date d affectation','Entrez la Date d affectation') !!}
               {!! Form::date('date_affectation',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Date d entrée à l administration','Entrez la Date d entrée à l administration') !!}
               {!! Form::date('date_entree_administration',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Grade','Entrez le Grade') !!}
               {!! Form::text('grade',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Date du grade','Entrez la date du grade') !!}
               {!! Form::date('date_grade',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Echelle','Entrez l Echelle') !!}
               {!! Form::text('echelle',null,['class'=>'form-control']) !!}

              </div>

               <div class="form-group">
               {!! Form::label('Echelon','Entrez l Echelon') !!}
               {!! Form::text('echelon',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Date d echelon','Entrez la date d echelon') !!}
               {!! Form::date('date_echelon',null,['class'=>'form-control']) !!}

              </div>

                <div class="form-group">
               {!! Form::label('Situation familiale','Entrez la situation familiale') !!}
               {!! Form::text('situation_familiale',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Budget','Entrez le budget') !!}
               {!! Form::text('budget',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Niveau scolaire','Entrez le niveau scolaire') !!}
               {!! Form::text('niveau_scolaire',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Nombres d enfants','Entrez le nombre d enfants') !!}
               {!! Form::text('nombre_enfants',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Nom complet de conjoint','Entrez le Nom complet de conjoint') !!}
               {!! Form::text('nom_complet_conjoint',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Fonction de conjoint','Entrez la Fonction de conjoint') !!}
               {!! Form::text('fonction_conjoint',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Diplome','Entrez le diplome') !!}
               {!! Form::text('diplome',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Nom père','Entrez le nom du père') !!}
               {!! Form::text('nom_pere',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Nom mère','Entrez le nom du mère') !!}
               {!! Form::text('nom_mere',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Remarque','Entrez une remarque') !!}
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