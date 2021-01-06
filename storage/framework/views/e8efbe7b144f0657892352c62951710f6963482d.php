 <?php echo $__env->make("fonctionnaires.index", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
<div class="row">
<?php if(count($fonctionnaires)>0): ?>
<?php foreach($fonctionnaires as $fonctionnaire): ?>
<!--<?php echo e($fonctionnaire->id); ?>

<?php echo e($fonctionnaire->nom); ?>-->
<?php endforeach; ?>
<?php endif; ?>
</div>
</div>