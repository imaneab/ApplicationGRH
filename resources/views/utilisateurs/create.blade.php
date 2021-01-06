<html>
<head>
<title>Ajout d'un utilisateur</title>
</head>
<body>
<section class="content">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">utilisateurs</div>

                <div class="panel-body">
               {!! Form::open(array('route'=>'utilisateur.store'))!!}
             
               <div class="form-group">
               {!! Form::label('Numero de badge','Numero de badge') !!}
               {!! Form::text('badgenumber',null,['class' => 'form-control']) !!}

              </div>
              <div class="form-group">
               {!! Form::label('E-mail','E-mail') !!}
               {!! Form::text('email',null,['class'=>'form-control']) !!}

              </div>
              <div class="form-group">
               {!! Form::label('Mot de passe :') !!}
               {!! Form::text('password',null,['class'=>'form-control']) !!}

              </div>

              <div class="form-group">
               {!! Form::label('Confirmer mot de passe : ') !!}
               {!! Form::text('confirm_password',null,['class'=>'form-control']) !!}

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
</section>

</body>

</html>