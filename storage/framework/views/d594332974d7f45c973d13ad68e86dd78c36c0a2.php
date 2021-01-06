<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestion de ressources humaines</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fonts/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="fonts/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>RH</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Application <b>G</b>RH</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">ABOU-OUAKIL Imane</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  ABOU-OUAKIL Imane
                  
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo e(url('/main/logout')); ?>" class="btn btn-default btn-flat">Déconnecter</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">les services</li>
        <li class="treeview">
          <a href="http://localhost:8000/menu">
            <i class=""></i> <span>Menu principale</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="http://localhost:8000/dashboard">
            <i class=""></i> <span>Ajout d'un fonctionnaire</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          
        </li>

        <li class="treeview">
          <a href="http://localhost:8000/gestion">
            <i class=""></i> <span>Gestion de fonctionnaire</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="http://localhost:8000/conge">
            <i class=""></i> <span>Ajout de congé</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="http://localhost:8000/user">
            <i class=""></i> <span>Ajout d'un utilisateur</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="">
            <i class=""></i> <span>Suppression de fonctionnaire</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <h1>
        Les conges :
        <small>vous pouvez cherchez des conges</small>
      </h1>
      <ol class="breadcrumb">
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <?php if(Session::has('message')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
        <?php endif; ?>

            <div class="">
                <div class="panel-heading"></div>

                <div class="panel-body">
                <form class="navbar-form" role="search" method="GET" action="<?php echo e(url("/searchconge")); ?>">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="badgenumber">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        <table class="table">
                <tr>
                <th>Numero de badge</th>
                <th>Type de congé</th>
                <th>Nombre de jours</th>
                <th>Nombre de jours consomés</th>
                <th>Nombre de jours restants</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Date de retour</th>
                <th>Remarque</th>
                </tr>

                <?php foreach($conges as $conge): ?>
                <?php if($conge->situation==1): ?>
                <tr>
                    <td> <?php echo e($conge->badgenumber); ?> </td>
                    <td><?php echo e($conge->type_conge); ?></td>
                    <td><?php echo e($conge->nombre_jours); ?></td>
                    <td><?php echo e($conge->nombre_jours_consomes); ?></td>
                    <td><?php echo e($conge->nombre_jours_restants); ?></td>
                    <td><?php echo e($conge->date_debut); ?></td>
                    <td><?php echo e($conge->date_fin); ?></td>
                    <td><?php echo e($conge->date_retour); ?></td>
                    <td><?php echo e($conge->remarque); ?></td>
                    <td>
                    <?php echo Form::open(array('route'=>['conge.destroy',$conge->id],'method'=>'DELETE')); ?> 
                    <?php echo e(link_to_route('conge.edit','Modifier',[$conge->id],['class' =>'btn btn-primary'])); ?>

                   
                   
                    <?php echo Form::button('Supprimer',['class'=>'btn btn-danger','type'=>'submit']); ?>

                    </td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                </table>
                </div>
            </div>
            <!--<?php echo e(link_to_route('fonctionnaire.create','Ajouter un nouveau fonctionnaire',null,['class' =>'btn btn-primary'])); ?>-->
        </div>
    </div>
</div>

        </div>
    </div>
  
</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong> Application de gestion de ressource humaines</strong> 
  </footer>

 
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>



