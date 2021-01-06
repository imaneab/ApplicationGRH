

<html>
<head>
<title>Ajout d'un conge</title>
</head>
<body>
<section class="content">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Conges</div>

                <div class="panel-body">
               <?php echo Form::open(array('route'=>'conge.store')); ?>

               <div class="form-group">
               <?php echo Form::label('type du conge','Entrez le type du conge'); ?>

               <?php echo Form::select('type_conge',array('annuel' => 'annuel','maternité'=> 'maternité','maladie'=> 'maladie'), null,array('class' => 'form-control')); ?>


              </div>
              <div class="form-group">
               <?php echo Form::label('nombre du jours','Entrez le nombre du jours'); ?>

               <?php echo Form::text('nombre_jours',null,['class'=>'form-control']); ?>


              </div>
              <div class="form-group">
               <?php echo Form::label('nombre_jours_consomes :'); ?>

               <?php echo Form::text('nombre_jours_consomes',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('nombre_jours_restants : '); ?>

               <?php echo Form::text('nombre_jours_restants',null,['class'=>'form-control']); ?>


              </div>

                  <div class="form-group">
               <?php echo Form::label('date de debut','Entrez la date de debut'); ?>

               <?php echo Form::date('date_debut',null,['class'=>'form-control']); ?>


              </div>
              
              <div class="form-group">
               <?php echo Form::label('date de fin','Entrez la date de fin'); ?>

               
              <!-- var maDate = "28/02/2010";
               var tabDate = maDate.split('/');
               var next14 = new Date(tabDate[2], tabDate[1]-1, +tabDate[0]+14);
               alert(next14,toLocaleString());-->
               <?php echo Form::date('date_fin',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('date de retour','Entrez la date de retour'); ?>

               <?php echo Form::date('date_retour',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('remarque','Entrez une remarque'); ?>

               <?php echo Form::text('remarque',null,['class'=>'form-control']); ?>


              </div>

              
              <div class="form-group">
              <?php echo Form::button('Ajouter',['type'=>'submit','class'=>'btn btn-primary']); ?>

              </div>
              <?php echo Form::close(); ?>


                </div>
            </div>
            <?php if($errors->has()): ?>
           <ul class="aler alert-danger">
           <?php foreach($errors->all() as $error): ?>
           <li><?php echo e($error); ?></li>
           <?php endforeach; ?>
           </ul>
           <?php endif; ?>

        </div>
    </div>
  
</div>
</section>

</body>

</html>