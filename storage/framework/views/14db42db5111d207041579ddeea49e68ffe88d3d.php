<!DOCTYPE html>
<html>
 <head>
  <title>Application GRH</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   body{
  background-image: url("dist/img/hh.png");
 }
  </style>

 </head>
 <body>
  <br />
  <br><br><br><br><br><br><br><br>

  <div class="container box">
   <h3 align="center">Connectez-vous <b></b></h3><br />

   <?php if(isset(Auth::user()->email)): ?>
    <script>window.location="/menu";</script>
   <?php endif; ?>

   <?php if($message = Session::get('error')): ?>
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><?php echo e($message); ?></strong>
   </div>
   <?php endif; ?>

   <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
     <ul>
     <?php foreach($errors->all() as $error): ?>
      <li><?php echo e($error); ?></li>
     <?php endforeach; ?>
     </ul>
    </div>
   <?php endif; ?>

   <form method="post" action="<?php echo e(url('/main/checklogin')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
     <label>Email :</label>
     <input type="email" name="email" class="form-control" />
    </div>
    <div class="form-group">
     <label>Mot de passe :</label>
     <input type="password" name="password" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Connexion" />
    </div>
   </form>
  </div>
 </body>
</html>