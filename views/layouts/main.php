<?php
use yii\helpers\BaseUrl;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> 
  <script> (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-3744700612400365", enable_page_level_ads: true }); </script>
  <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
  <!-- Theme Made By www.w3schools.com -->
  <title><?= $this->title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="<?= BaseUrl::base();?>/bower_components/jquery/dist/jquery.min.js"></script>
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
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= BaseUrl::base();?>/bower_components/select2/dist/css/select2.min.css">
    
  <style>
    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(<?= BaseUrl::base();?>/img/Preloader.gif) center no-repeat #fff;
        opacity: 0.5;
        filter: alpha(opacity=50); /* For IE8 and earlier */
    }
    body {
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
        color: #303030;
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
      padding: 100px;
      font-family: Montserrat, sans-serif;
      height:100%;
      margin-bottom:10px;
      
    }
    
    .centering{
        float: none;
        margin: 0 auto;
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
      background-color: #F9F9F9;
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
      background-color: rgb(60, 141, 188,0.7);
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
  /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    
<div class="se-pre-con"></div>

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
        <li class="<?=Yii::$app->view->params['selected'][0];?>"><a href="<?=Yii::$app->homeUrl;?>">BERANDA</a></li>
        <li class="<?=Yii::$app->view->params['selected'][1];?>"><a href="<?=Yii::$app->homeUrl;?>site/issi">SAHAM</a></li>
        <li class="<?=Yii::$app->view->params['selected'][2];?>"><a href="<?=Yii::$app->homeUrl;?>site/blog">BLOG</a></li>
        <li class="<?=Yii::$app->view->params['selected'][3];?>"><a href="<?=Yii::$app->homeUrl;?>site/apps">APPS</a></li>
        <li class="<?=Yii::$app->view->params['selected'][4];?>"><a href="<?=Yii::$app->homeUrl;?>site/contact">HUBUNGI</a></li>
        <?php if(Yii::$app->user->isGuest){ ?>
        <li class="<?=Yii::$app->view->params['selected'][5];?>"><a href="<?=Yii::$app->homeUrl;?>site/login">LOGIN</a></li>
        <?php }else{ ?>
        <li class="<?=Yii::$app->view->params['selected'][5];?>"><a href="<?=Yii::$app->homeUrl;?>user/dashboard">DASHBOARD</a></li>
        
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
    



<script src="<?= BaseUrl::base();?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?= BaseUrl::base(); ?>/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?= BaseUrl::base();?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= BaseUrl::base();?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= BaseUrl::base();?>/bower_components/datatables.net/js/dataTables.select.min.js"></script>    

<script>
$(document).ready(function(){
           
    $(".se-pre-con").hide();
    
    $("#issiform-sector").on('change', function() {
        var level = $(this).val();
        $('#issiform-subsector').empty();
        $('#issiform-subsector').append('<option value="">All</option>');
        if(level){
            $.ajax ({
                type: 'GET',
                url: '<?=Yii::$app->homeUrl;?>subsectors',
                data: { sector_id: level  },
                success : function(data) {
                    
                    $.each(data, function(index,value) {
                        $('#issiform-subsector').append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                    
                },
                error:function(e){
                    
                    console.log(e);
                }
            });
        }
    });
    
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
    
    $("#stockcalculator-type").change(function(){
        
        $("#stockcalculator-capital").val(0);
            $("#stockcalculator-buyfee").val(0);
            $("#stockcalculator-sellfee").val(0);
            $("#stockcalculator-buy").val(0);
            $("#stockcalculator-lot").val(0);
            $("#stockcalculator-profitpercentage").val(0);
            $("#stockcalculator-sell").val(0);
            $("#stockcalculator-margin").val(0);
        
        if(this.value === "buy"){
            $("#stockcalculator-capital").attr("readonly", false);
            $("#stockcalculator-buyfee").attr("readonly", false);
            $("#stockcalculator-sellfee").attr("readonly", false);
            $("#stockcalculator-buy").attr("readonly", false);
            $("#stockcalculator-lot").attr("readonly", true);
            $("#stockcalculator-profitpercentage").attr("readonly", false);
            $("#stockcalculator-sell").attr("readonly", true);
            $("#stockcalculator-margin").attr("readonly", true);
            
        }else if(this.value === "sell"){
            $("#stockcalculator-capital").attr("readonly", true);
            $("#stockcalculator-buyfee").attr("readonly",false);
            $("#stockcalculator-sellfee").attr("readonly",false);
            $("#stockcalculator-buy").attr("readonly", false);
            $("#stockcalculator-lot").attr("readonly", false);
            $("#stockcalculator-profitpercentage").attr("readonly", false);
            $("#stockcalculator-sell").attr("readonly", false);
            $("#stockcalculator-margin").attr("readonly", true);
            
        }else{
            $("#stockcalculator-capital").attr("readonly", true);
            $("#stockcalculator-buyfee").attr("readonly",true);
            $("#stockcalculator-sellfee").attr("readonly",true);
            $("#stockcalculator-buy").attr("readonly", true);
            $("#stockcalculator-lot").attr("readonly", true);
            $("#stockcalculator-profitpercentage").attr("readonly", true);
            $("#stockcalculator-sell").attr("readonly", true);
            $("#stockcalculator-margin").attr("readonly", true);
        }
        
    });
    
    $("#stockcalculator-capital").on('keyup keypress blur change',function(){
        $(this).val(function(index, value) {
            return value.replace(/[^0-9]/g, '').replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        });                            
    });
            
    $("#stockcalculator-buy").on('keyup keypress blur change',function(){
        $(this).val(function(index, value) {
            return value.replace(/[^0-9]/g, '').replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        });
    });
            
    $("#stockcalculator-sellfee").on('keyup keypress blur change',function(){
       $(this).val(function(index, value) {
            return value.replace(/[^0-9.,]/g, '').replace(/,/g, ".");
       });         
    });
    
    $("#stockcalculator-buyfee").on('keyup keypress blur change',function(){
        $(this).val(function(index, value) {
            return value.replace(/[^0-9.,]/g, '').replace(/,/g, ".");
        });        
    });
    
    $("#stockcalculator-profitpercentage").on('keyup keypress blur change',function(){
        $("#stockcalculator-sell").attr("readonly", true);
        $(this).val(function(index, value) {
            return value.replace(/[^0-9.,]/g, '').replace(/,/g, ".");
        });       
    });
    
    $("#stockcalculator-sell").on('keyup keypress blur change',function(){
        $("#stockcalculator-profitpercentage").attr("readonly", true);
        $(this).val(function(index, value) {
            return value.replace(/[^0-9]/g, '').replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        });   
        
    });
    
    $("#stockcalculator-calculate").click(function(e){
        
        var type = $("#stockcalculator-type").val();
        
        if(type === "buy"){
            
            var capital = Math.floor(parseFloat($("#stockcalculator-capital").val().replace(/,/g, "")));   
            var buyfee = parseFloat($("#stockcalculator-buyfee").val()/100);
            var sellfee = parseFloat($("#stockcalculator-sellfee").val()/100);
            var buy = parseFloat($("#stockcalculator-buy").val().replace(/,/g, "")*(1+buyfee));
            var profit = parseFloat($("#stockcalculator-profitpercentage").val()/100);
            var sell = Math.ceil(parseFloat(buy*(1+sellfee+profit)));
            var lot = buy === 0 ? 0 : Math.floor(parseFloat(capital/(buy*100)));
            var margin = (sell - buy)*lot*100;

            if(buyfee > 0 && sellfee > 0 && buy > 0 && profit > 0){
                $("#stockcalculator-sell").val(sell.toLocaleString("en-US",{minimumFractionDigits: 2,maximumFractionDigits: 2}));
            }
            
            if(capital > 0 && buyfee > 0 && sellfee > 0 && buy > 0){
                $("#stockcalculator-lot").val(lot);
            }
            
            if(buyfee > 0 && sellfee > 0 && buy > 0 && profit >0 && sell > 0){
                $("#stockcalculator-margin").val(margin.toLocaleString("en-US",{minimumFractionDigits: 2,maximumFractionDigits: 2}));
            }
            
        }else if(type === "sell"){
            
            var buyfee = parseFloat($("#stockcalculator-buyfee").val()/100);
            var sellfee = parseFloat($("#stockcalculator-sellfee").val()/100);
            var buy = parseFloat($("#stockcalculator-buy").val().replace(/,/g, "")*(1+buyfee));        
            var sell = parseFloat($("#stockcalculator-sell").val());
            
            if(sell === 0){
                
                var profit = parseFloat($("#stockcalculator-profitpercentage").val()/100);
                sell = Math.ceil(parseFloat(buy*(1+sellfee+profit)));

                if(buyfee > 0 && sellfee > 0 && buy > 0 && profit > 0){
                    $("#stockcalculator-sell").val(sell.toLocaleString("en-US",{minimumFractionDigits: 2,maximumFractionDigits: 2}));
                }
                
            }else{
                
                sell = parseFloat($("#stockcalculator-sell").val().replace(/,/g, "")*(1-sellfee));
                var profit = parseFloat(((sell - buy)/buy)*100);
                
                if(buyfee > 0 && sellfee > 0 && buy > 0 && sell > 0){
                    $("#stockcalculator-profitpercentage").val(profit.toLocaleString("en-US",{minimumFractionDigits: 2,maximumFractionDigits: 2}));
                }
                
            }
            
            var lot = $("#stockcalculator-lot").val();
            var margin = (sell - buy)*lot*100;

            if(buyfee > 0 && sellfee > 0 && buy > 0 && profit >0 && sell > 0){
                $("#stockcalculator-margin").val(margin.toLocaleString("en-US",{minimumFractionDigits: 2,maximumFractionDigits: 2}));
            }
            
            
        }
        
        e.preventDefault();
    })
    
    
  
})
</script>

</body>
</html>