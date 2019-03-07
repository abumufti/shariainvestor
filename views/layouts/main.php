<?php
use yii\helpers\BaseUrl;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title><?= $this->title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= BaseUrl::base() ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= BaseUrl::base() ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= BaseUrl::base() ?>/bower_components/Ionicons/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= BaseUrl::base();?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?= BaseUrl::base();?>/bower_components/datatables.net-bs/css/select.dataTables.min.css">
    
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h3 {
      font-size: 21px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 20px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
      height:100%;
      margin-bottom:10px;
      
  }
  
   .jumbotron h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #fff;
      font-weight: 600;
      margin-bottom: 30px;
  }
  
  .container-fluid {
      padding: 0px 50px;
      font-family: Montserrat, sans-serif;
      font-size: 18px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
/*  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }*/
  
  .navbar {
      margin-bottom: 0;
      background-color: rgb(244,81,30,0.7);
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?=Yii::$app->homeUrl;?>">shariainvestor.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?=Yii::$app->view->params['selected'][0];?>"><a href="<?=Yii::$app->homeUrl;?>">HOME</a></li>
        <li class="<?=Yii::$app->view->params['selected'][1];?>"><a href="<?=Yii::$app->homeUrl;?>site/issi">STOCK</a></li>
        <li class="<?=Yii::$app->view->params['selected'][2];?>"><a href="<?=Yii::$app->homeUrl;?>site/blog">BLOG</a></li>
        <li class="<?=Yii::$app->view->params['selected'][3];?>"><a href="<?=Yii::$app->homeUrl;?>site/contact">CONTACT</a></li>
        <?php if(Yii::$app->user->isGuest){ ?>
        <li class="<?=Yii::$app->view->params['selected'][4];?>"><a href="<?=Yii::$app->homeUrl;?>site/login">LOGIN</a></li>
        <?php }else{ ?>
        <li class="<?=Yii::$app->view->params['selected'][4];?>"><a href="<?=Yii::$app->homeUrl;?>user/dashboard">DASHBOARD</a></li>
        
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>

<?=$content;?>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Copyright © 2019. All rights reserved. <a href="<?=Yii::$app->homeUrl;?>" title="Visit Sharia Investor">www.shariainvestor.com</a></p>
</footer>
<script src="<?= BaseUrl::base();?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= BaseUrl::base();?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="<?= BaseUrl::base();?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= BaseUrl::base();?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= BaseUrl::base();?>/bower_components/datatables.net/js/dataTables.select.min.js"></script>    

<script>
$(document).ready(function(){
    
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myList .card-body").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    
    $("#table1").DataTable({
        "paging"      : true,
        "lengthChange": true,
        "searching"   : true,
        "ordering"    : true,
        "info"        : true,
        "autoWidth"   : false,
        "scrollX"     : "100%",
        "scrollCollapse": true,
        "select": {
            style:    'single',
            
        }
        
    });
    
    $("#table2").DataTable({
        "paging"      : true,
        "lengthChange": true,
        "searching"   : true,
        "ordering"    : false,
        "info"        : true,
        "autoWidth"   : false,
        "scrollX"     : "100%",
        "scrollCollapse": true,
        "select": {
            style:    'single',
            
        }
        
    });
    
    $("#table3").DataTable({
        "paging"      : false,
        "lengthChange": false,
        "searching"   : false,
        "ordering"    : false,
        "info"        : false,
        "autoWidth"   : false,
        "scrollX"     : "100%",
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