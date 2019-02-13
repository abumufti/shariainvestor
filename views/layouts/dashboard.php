<?php 
use yii\helpers\BaseUrl;
use yii\helpers\Html;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= Html::encode($this->title); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BaseUrl::base() ?>/dist/css/AdminLTE.min.css">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= BaseUrl::base() ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BaseUrl::base() ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= BaseUrl::base() ?>/bower_components/Ionicons/css/ionicons.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= BaseUrl::base() ?>/dist/css/skins/_all-skins.min.css">
    <?= $this->params['header']; ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(<?= BaseUrl::base();?>/images/Preloader.gif) center no-repeat #fff;
            opacity: 0.5;
            filter: alpha(opacity=50); /* For IE8 and earlier */
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= Yii::$app->homeUrl ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>INV</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sharia</b>Investor</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?= BaseUrl::base();?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?= BaseUrl::base();?>/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?= BaseUrl::base();?>/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?= BaseUrl::base();?>/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?= BaseUrl::base();?>/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= BaseUrl::base();?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= BaseUrl::base();?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= BaseUrl::toRoute(['/site/logout']);?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= BaseUrl::base();?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
                        
        <li class="treeview <?= $this->params['tree'][0];?>">
          <a href="#">
            <i class="fa fa-folder"></i><span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= $this->params['selected'][1]; ?>" ><a href="<?= BaseUrl::toRoute(['admin/category']);?>"><i class="fa fa-circle-o text-yellow"></i> Category</a></li>
            <li class="<?= $this->params['selected'][2];?>" ><a href="<?= BaseUrl::toRoute(['admin/sector']);?>"><i class="fa fa-circle-o text-red"></i> Sector</a></li>
            <li class="<?= $this->params['selected'][3];?>" ><a href="<?= BaseUrl::toRoute(['admin/emiten']);?>"><i class="fa fa-circle-o text-green"></i> Emiten</a></li>
            <li class="<?= $this->params['selected'][4];?>" ><a href="<?= BaseUrl::toRoute(['admin/financial']);?>"><i class="fa fa-circle-o text-blue"></i> Finance</a></li>
          </ul>
        </li>
        <li class="treeview <?= $this->params['tree'][1];?>">
          <a href="#">
            <i class="fa fa-edit"></i><span>Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= $this->params['selected'][5];?>" ><a href="<?= BaseUrl::toRoute(['post/compose']);?>"><i class="fa fa-circle-o text-red"></i> Compose</a></li>
            <li class="<?= $this->params['selected'][6];?>" ><a href="<?= BaseUrl::toRoute(['post/view']);?>"><i class="fa fa-circle-o text-yellow"></i> View</a></li>
          </ul>
        </li>
        <li class="<?= $this->params['tree'][2];?>" >
          <a href="<?= BaseUrl::toRoute(['user/dashboard']);?>">
            <i class="fa fa-th"></i><span>Dashboard</span>
          </a>
        </li>
        <li class="treeview <?= $this->params['tree'][3];?>">
          <a href="#">
            <i class="fa fa-newspaper-o"></i><span>Administration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= $this->params['selected'][7];?>" ><a href="<?= BaseUrl::toRoute(['administration/broker']);?>"><i class="fa fa-circle-o text-red"></i> Broker</a></li>
            <li class="<?= $this->params['selected'][8];?>" ><a href="<?= BaseUrl::toRoute(['administration/deposit']);?>"><i class="fa fa-circle-o text-yellow"></i> Bank</a></li>
            <li class="<?= $this->params['selected'][9];?>" ><a href="<?= BaseUrl::toRoute(['administration/dividen']);?>"><i class="fa fa-circle-o text-green"></i> Dividen</a></li>
          </ul>
        </li>   
        <li class="treeview <?= $this->params['tree'][4];?>">
          <a href="#">
            <i class="fa fa-book"></i><span>History</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= $this->params['selected'][10];?>" ><a href="<?= BaseUrl::toRoute(['history/buy']);?>"><i class="fa fa-circle-o text-red"></i> Buy</a></li>
            <li class="<?= $this->params['selected'][11];?>" ><a href="<?= BaseUrl::toRoute(['history/sell']);?>"><i class="fa fa-circle-o text-yellow"></i> Sell</a></li>
          </ul>
        </li>  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $this->params['page']; ?>
        <small><?= $this->params['subpage']; ?></small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">

      <?= $content ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1
    </div>
    <strong>Copyright &copy; <?= date('Y') ?> <?= Yii::powered() ?>.</strong> All rights
      reserved.
  </footer>
  
</div>
<!-- ./wrapper -->
<div class="se-pre-con"></div>
<!-- jQuery 3 -->
<script src="<?= BaseUrl::base() ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= BaseUrl::base() ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= BaseUrl::base() ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= BaseUrl::base() ?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= BaseUrl::base() ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= BaseUrl::base() ?>/dist/js/demo.js"></script>
<?= $this->params['footer']; ?>
<script>
  $(function () {
      
    $(".se-pre-con").hide();
    
    $(window).load(function() {
	$(".se-pre-con").show();
    });
    
  })
</script>
</body>
</html>
