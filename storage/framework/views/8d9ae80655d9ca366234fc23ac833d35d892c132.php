<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <?php if(Session::has('message')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
        <?php endif; ?>

            
                <div class="panel-heading">Fonctionnaires</div>

                <div class="panel-body">
                <?php foreach($fonctionnaires as $fonctionnaire): ?>
                <tr>
                    <td> <?php echo e($fonctionnaire->badgenumber); ?> </td>
                    <td><?php echo e($fonctionnaire->nom); ?></td>
                    <td><?php echo e($fonctionnaire->prenom); ?></td>
                    <td><?php echo e($fonctionnaire->fonction); ?></td>
                    <td><?php echo e($fonctionnaire->division); ?></td>
                    <td><?php echo e($fonctionnaire->genre); ?></td>
                    <td><?php echo e($fonctionnaire->CIN); ?></td>
                    <td><?php echo e($fonctionnaire->service); ?></td>
                    <td><?php echo e($fonctionnaire->date_affectation); ?></td>
                    <td><?php echo e($fonctionnaire->date_entree_administration); ?></td>
                    <td><?php echo e($fonctionnaire->grade); ?></td>
                    <td><?php echo e($fonctionnaire->date_grade); ?></td>
                    <td><?php echo e($fonctionnaire->echelle); ?></td>
                    <td><?php echo e($fonctionnaire->echelon); ?></td>
                    <td><?php echo e($fonctionnaire->date_echelon); ?></td>
                    <td><?php echo e($fonctionnaire->situation_familiale); ?></td>
                    <td><?php echo e($fonctionnaire->budget); ?></td>
                    <td><?php echo e($fonctionnaire->niveau_scolaire); ?></td>
                    <td><?php echo e($fonctionnaire->nombre_enfants); ?></td>
                    <td><?php echo e($fonctionnaire->nom_complet_conjoint); ?></td>
                    <td><?php echo e($fonctionnaire->fonction_conjoint); ?></td>
                    <td><?php echo e($fonctionnaire->diplome); ?></td>
                    <td><?php echo e($fonctionnaire->nom_pere); ?></td>
                    <td><?php echo e($fonctionnaire->nom_mere); ?></td>
                    <td><?php echo e($fonctionnaire->remarque); ?></td>
                    <tr>
                    <?php endforeach; ?>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>