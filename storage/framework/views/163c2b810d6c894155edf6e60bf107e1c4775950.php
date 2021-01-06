<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier les informations d'un congé</div>

                <div class="panel-body">
               <?php echo Form::model($conge,array('route'=>['conge.update',$conge->id],'method'=>'PUT')); ?>

               <div class="form-group">
               <?php echo Form::label('ID de fonctionnaire','Entrez l ID de fonctionnaire'); ?>

               <?php echo Form::text('fonctionnaires_id',null,['class'=>'form-control']); ?>


              </div>
              <div class="form-group">
               <?php echo Form::label('Type de congé','Entrez le Type de congé'); ?>

               <?php echo Form::select('type_conge',array('annuel' => 'annuel','maternité'=> 'maternité','maladie'=> 'maladie'), null,array('class' => 'form-control')); ?>


              </div>
              <div class="form-group">
               <?php echo Form::label('Nombre de jours','Entrez le Nombre de jours'); ?>

               <?php echo Form::text('nombre_jours',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Nombre de jours consomés','Entrez le Nombre de jours consomés'); ?>

               <?php echo Form::text('nombre_jours_consomes',null,['class'=>'form-control']); ?>


              </div>

                  <div class="form-group">
               <?php echo Form::label('Nombre de jours restants','Entrez le Nombre de jours restants'); ?>

               <?php echo Form::text('nombre_jours_restants',null,['class'=>'form-control']); ?>


              </div>
              
              <div class="form-group">
               <?php echo Form::label('Date de début','Entrez la Date de début'); ?>

               <?php echo Form::text('date_debut',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Date de fin','Entrez la Date de fin'); ?>

               <?php echo Form::text('date_fin',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Date de retour','Entrez la Date de retour'); ?>

               <?php echo Form::text('date_retour',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Remarque','Entrez une Remarque'); ?>

               <?php echo Form::text('remarque',null,['class'=>'form-control']); ?>


              </div>

              
              <div class="form-group">
              <?php echo Form::button('Modifier',['type'=>'submit','class'=>'btn btn-primary']); ?>

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