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
              
                <div class="pull">
                <center>
                  <a href="{{ url('/main/logout') }}" class="btn btn-default btn-flat">Déconnecter</a>
                  </center>
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
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">les services offertes</li>
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
          <a href="http://localhost:8000/cong">
            <i class=""></i> <span>Ajout de congé</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="http://localhost:8000/register">
            <i class=""></i> <span>Ajout d'un utilisateur</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="http://localhost:8000/sup">
            <i class=""></i> <span>Suppression de fonctionnaire</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="http://localhost:8000/attestation">
            <i class=""></i> <span>Demande d'attestation de travail</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="http://localhost:8000/yes">
            <i class=""></i> <span>Validation de congé</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="http://localhost:8000/editcon">
            <i class=""></i> <span>Supression/Modification <br> de congés validés</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="http://localhost:8000/conge">
            <i class=""></i> <span>Recherche de congés</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          </li>
          <li class="treeview">
          <a href="http://localhost:8000/edituser">
            <i class=""></i> <span>Supression/Modification <br>d'utilisateurs</span>
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
        Les services offerte :
        <small>choisissez svp un service</small>
      </h1>
      <ol class="breadcrumb">
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
    <!--<  <a href="http://localhost:8000/dashboard" >
              <img src="dist/img/ajout.png" style="left:100px;top:15px;width:167px;height:97px" >
            </a>

img href="#" src="dist/img/ajout.png"  width=300 height=380>-->

<div id="wb_Shape3" style="position:absolute;left:227px;top:0px;width:428px;height:453px;z-index:28;">
<a href="#" onclick="window.location.href='http://localhost:8000/dashboard';return false;"><img src="dist/img/ajout.png" id="Shape3" alt="" style="width:328px;height:403px;"></a></div>


<div id="wb_Shape4" style="position:absolute;left:460px;top:0px;width:428px;height:453px;z-index:28;">
<a href="#" onclick="window.location.href='http://localhost:8000/gestion';return false;"><img src="dist/img/modification.png" id="Shape4" alt="" style="width:328px;height:403px;"></a></div>

<div id="wb_Shape5" style="position:absolute;left:727px;top:0px;width:428px;height:453px;z-index:28;">
<a href="#" onclick="window.location.href='http://localhost:8000/cong';return false;"><img src="dist/img/aa.png" id="Shape5" alt="" style="width:328px;height:403px;"></a></div>

<div id="wb_Shape6" style="position:absolute;left:227px;top:160px;width:428px;height:453px;z-index:28;">
<a href="http://localhost:8000/help" onclick="window.location.href='http://localhost:8000/help';return false;"><img src="dist/img/user.png" id="Shape6" alt="" style="width:328px;height:403px;"></a></div>

<div id="wb_Shape9" style="position:absolute;left:1000px;top:0px;width:428px;height:453px;z-index:28;">
<a href="http://localhost:8000/attestation" onclick="window.location.href='http://localhost:8000/attestation';return false;"><img src="dist/img/att.png" id="Shape9" alt="" style="width:328px;height:403px;"></a></div>

<div id="wb_Shape7" style="position:absolute;left:460px;top:160px;width:428px;height:453px;z-index:28;">
<a href="http://localhost:8000/sup" onclick="window.location.href='http://localhost:8000/sup';return false;"><img src="dist/img/sup.png" id="Shape7" alt="" style="width:328px;height:403px;"></a></div>

<div id="wb_Shape8" style="position:absolute;left:727px;top:160px;width:428px;height:453px;z-index:28;">
<a href="http://localhost:8000/yes" onclick="window.location.href='http://localhost:8000/yes';return false;"><img src="dist/img/validation.png" id="Shape8" alt="" style="width:328px;height:403px;"></a></div>

<div id="wb_Shape10" style="position:absolute;left:1000px;top:160px;width:428px;height:453px;z-index:28;">
<a href="http://localhost:8000/editcon" onclick="window.location.href='http://localhost:8000/editcon';return false;"><img src="dist/img/ges_conge.png" id="Shape10" alt="" style="width:328px;height:403px;"></a></div>

<div id="wb_Shape11" style="position:absolute;left:227px;top:320px;width:428px;height:453px;z-index:28;">
<a href="http://localhost:8000/conge" onclick="window.location.href='http://localhost:8000/conge';return false;"><img src="dist/img/recherche.png" id="Shape11" alt="" style="width:328px;height:403px;"></a></div>

<div id="wb_Shape12" style="position:absolute;left:460px;top:320px;width:428px;height:453px;z-index:28;">
<a href="http://localhost:8000/edituser" onclick="window.location.href='http://localhost:8000/edituser';return false;"><img src="dist/img/edituser.png" id="Shape12" alt="" style="width:328px;height:403px;"></a></div>

<div id="wb_Shape13" style="position:absolute;left:727px;top:320px;width:428px;height:453px;z-index:28;">
<a href="http://localhost:8000/aut" onclick="window.location.href='http://localhost:8000/aut';return false;"><img src="dist/img/ajout_aut.png" id="Shape13" alt="" style="width:328px;height:403px;"></a></div>

<div id="wb_Shape14" style="position:absolute;left:1000px;top:320px;width:428px;height:453px;z-index:28;">
<a href="http://localhost:8000/yesaut" onclick="window.location.href='http://localhost:8000/yesaut';return false;"><img src="dist/img/val_aut.png" id="Shape14" alt="" style="width:328px;height:403px;"></a></div>

<!--<div id="wb_Shape6" style="position:absolute;left:227px;top:380px;width:428px;height:453px;z-index:28;">
<a href="#" onclick="window.location.href='http://localhost:8000/register';return false;"><img src="dist/img/autorisation.png" id="Shape6" alt="" style="width:328px;height:403px;"></a></div>-->





      

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
