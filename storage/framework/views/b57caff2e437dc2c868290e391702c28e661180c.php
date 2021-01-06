<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier les informations d'un utilisateur</div>

                <div class="panel-body">
               <?php echo Form::model($utilisateur,array('route'=>['utilisateur.update',$utilisateur->id],'method'=>'PUT')); ?>

               <div class="form-group">
               <?php echo Form::label('Numero de badge','Numero de badge'); ?>

               <?php echo Form::text('badgenumber',null,['class' => 'form-control']); ?>


              </div>
              <div class="form-group">
               <?php echo Form::label('E-mail','E-mail'); ?>

               <?php echo Form::text('email',null,['class'=>'form-control']); ?>


              </div>
              <div class="form-group">
               <?php echo Form::label('Mot de passe :'); ?>

               <?php echo Form::text('password',null,['class'=>'form-control']); ?>


              </div>

              <div class="form-group">
               <?php echo Form::label('Confirmer mot de passe : '); ?>

               <?php echo Form::text('confirm_password',null,['class'=>'form-control']); ?>


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