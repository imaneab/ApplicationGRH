<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Fonctionnaires</div>

                <div class="panel-body">
                our form
               <?php echo Form::open(array('route'=>'fonctionnaire.store')); ?>

               <div class="form-group">
               <?php echo Form::label('Numero de badge','Entrez le numéro de badge'); ?>

               <?php echo Form::text('badgenumber',null,['class'=>'form-control']); ?>


              </div>
              <div class="form-group">
               <?php echo Form::label('Nom','Entrez le nom'); ?>

               <?php echo Form::text('nom',null,['class'=>'form-control']); ?>


              </div>
              <div class="form-group">
               <?php echo Form::label('Prenom','Entrez le prénom'); ?>

               <?php echo Form::text('prenom',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Fonction','Entrez la fonction'); ?>

               <?php echo Form::text('fonction',null,['class'=>'form-control']); ?>


              </div>

                  <div class="form-group">
               <?php echo Form::label('Division','Entrez la division'); ?>

               <?php echo Form::text('division',null,['class'=>'form-control']); ?>


              </div>
              
              <div class="form-group">
               <?php echo Form::label('Genre','Entrez le genre'); ?>

               <?php echo Form::text('genre',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('CIN','Entrez le CIN'); ?>

               <?php echo Form::text('CIN',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Service','Entrez le service'); ?>

               <?php echo Form::text('service',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Date d affectation','Entrez la Date d affectation'); ?>

               <?php echo Form::date('date_affectation',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Date d entrée à l administration','Entrez la Date d entrée à l administration'); ?>

               <?php echo Form::date('date_entree_administration',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Grade','Entrez le Grade'); ?>

               <?php echo Form::text('grade',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Date du grade','Entrez la date du grade'); ?>

               <?php echo Form::date('date_grade',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Echelle','Entrez l Echelle'); ?>

               <?php echo Form::text('echelle',null,['class'=>'form-control']); ?>


              </div>

               <div class="form-group">
               <?php echo Form::label('Echelon','Entrez l Echelon'); ?>

               <?php echo Form::text('echelon',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Date d echelon','Entrez la date d echelon'); ?>

               <?php echo Form::date('date_echelon',null,['class'=>'form-control']); ?>


              </div>

                <div class="form-group">
               <?php echo Form::label('Situation familiale','Entrez la situation familiale'); ?>

               <?php echo Form::text('situation_familiale',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Budget','Entrez le budget'); ?>

               <?php echo Form::text('budget',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Niveau scolaire','Entrez le niveau scolaire'); ?>

               <?php echo Form::text('niveau_scolaire',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Nombres d enfants','Entrez le nombre d enfants'); ?>

               <?php echo Form::text('nombre_enfants',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Nom complet de conjoint','Entrez le Nom complet de conjoint'); ?>

               <?php echo Form::text('nom_complet_conjoint',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Fonction de conjoint','Entrez la Fonction de conjoint'); ?>

               <?php echo Form::text('fonction_conjoint',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Diplome','Entrez le diplome'); ?>

               <?php echo Form::text('diplome',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Nom père','Entrez le nom du père'); ?>

               <?php echo Form::text('nom_pere',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Nom mère','Entrez le nom du mère'); ?>

               <?php echo Form::text('nom_mere',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Remarque','Entrez une remarque'); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>