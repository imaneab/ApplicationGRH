<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">voir :</div>

                <div class="panel-body">
                  <?php foreach($user as $users): ?>
                  <img src=" <?php echo e($users->nom); ?>" alt="" width="150" height="150">
                  <br/>
                 
                  <?php endforeach; ?>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>