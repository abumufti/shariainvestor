
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\BaseUrl;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121955327-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121955327-1');
    </script>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= BaseUrl::base();?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BaseUrl::base();?>/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= BaseUrl::base();?>/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= BaseUrl::base();?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= BaseUrl::base();?>/bower_components/datatables.net-bs/css/select.dataTables.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BaseUrl::base();?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= BaseUrl::base();?>/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
        
        body{
             font-size :1.8rem;
        
        }
        
        h4{
           font-size:2.25rem;
        }
    </style>
</head>
<body class="hold-transition skin-blue layout-top-nav">

<div class="wrapper">

  <header class="main-header">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => Yii::$app->homeUrl],
            ['label' => 'Stoks', 'items'=>[
                ['label' => 'All', 'url' => ['/emiten/all']],
                ['label' => 'Indexed', 'url' => ['/emiten/indexed']],
                ['label' => 'Under Value', 'url' => ['/emiten/under-value']],
            ]],          
            ['label' => 'Blog'],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
            ''
            ):( ['label' => 'Dashboard', 'url' => ['/user/dashboard']]   ),        
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (                
                ''
            )
        ],
    ]);
    NavBar::end();
    ?>
  </header>
    
   
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <br><br><br> 
    <div class="container">

      <!-- Main content -->
      <section class="content">
          
          <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="background:#bae1ff">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.2
      </div>
      <strong>Copyright &copy; <?= date('Y') ?>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->
<div class="se-pre-con"></div>
<!-- jQuery 3 -->
<script src="<?= BaseUrl::base();?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= BaseUrl::base();?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= BaseUrl::base();?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= BaseUrl::base();?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= BaseUrl::base();?>/bower_components/datatables.net/js/dataTables.select.min.js"></script>
<!-- SlimScroll -->
<script src="<?= BaseUrl::base();?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= BaseUrl::base();?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= BaseUrl::base();?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= BaseUrl::base();?>/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {

    $("#table1").DataTable({
        "paging"      : false,
        "lengthChange": false,
        "searching"   : false,
        "ordering"    : false,
        "info"        : false,
        "autoWidth"   : false,
        "scrollX"     : "200px",
        "scrollCollapse": true,
        "select": {
            style:    'single',
            
        }
        
    });
    
    $("#table2").DataTable({
        "paging"      : false,
        "lengthChange": false,
        "searching"   : false,
        "ordering"    : false,
        "info"        : false,
        "autoWidth"   : false,
        "scrollX"     : "200px",
        "scrollCollapse": true,
        "select": {
            style:    'single',
            
        }
        
    });
    
    $(".se-pre-con").hide();
    
    $(window).load(function() {
        // Animate loader off screen
	$(".se-pre-con").show();
    });
    
  })
</script>
</body>
</html>

