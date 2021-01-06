<?php $__env->startSection('content'); ?>
  <?php echo Form::model($conge,array('route'=>['conge.update',$conge->id],'method'=>'PUT')); ?>

<div class="form-group">

<?php echo Form::text('situation',1,['class'=>'form-control']); ?>


</div>
<div class="form-group">
<?php echo Form::button('Modifier',['type'=>'submit','class'=>'btn btn-primary']); ?>

              </div>

<?php echo Form::close(); ?>

<?php if($errors->has()): ?>
           <ul class="aler alert-danger">
           <?php foreach($errors->all() as $error): ?>
           <li><?php echo e($error); ?></li>
           <?php endforeach; ?>
           </ul>
           <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>