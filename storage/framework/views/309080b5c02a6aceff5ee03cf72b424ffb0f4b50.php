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
        Les Fonctionnaires :
        <small>vous pouvez cherchez des fonctionnaires</small>
      </h1>
      <ol class="breadcrumb">
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="form-group">
    <?php echo Form::model($fonctionnaire,array('route'=>['fonctionnaire.update',$fonctionnaire->id],'method'=>'PUT')); ?>

    <div>
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
              <?php echo Form::button('Modifier',['type'=>'submit','class'=>'btn btn-primary']); ?>

              </div>
               <?php echo Form::close(); ?>

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
