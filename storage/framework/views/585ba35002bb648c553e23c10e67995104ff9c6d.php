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
               <?php echo Form::open(array('route'=>'utilisateur.store')); ?>

             
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