<?php
use yii\helpers\BaseUrl;
use yii\helpers\BaseStringHelper;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121955327-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-121955327-1');
  </script>
  <!-- Google Adsense -->  
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> 
  <script> (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-3744700612400365", enable_page_level_ads: true }); </script>
  <!-- Google Adsense AMP --> 
  <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
  <!-- Responsive -->
  <title><?= $this->title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= strip_tags(BaseStringHelper::explode(Yii::$app->view->params['description'],'</p>')[0].'</p>'); ?>" />
  <meta name="image_src" content="https://shariainvestor.com/img/display.png">
  <!-- FB -->
  <meta property="og:title" content="<?= $this->title; ?>" />
  <meta property="og:url" content="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="<?= strip_tags(BaseStringHelper::explode(Yii::$app->view->params['description'],'</p>')[0].'</p>'); ?>" />
  <meta property="og:image" content="https://shariainvestor.com/img/display.png" />
  <meta property="og:site_name" content="Sharia Investor">
  <meta property="fb:app_id" content="458278107551122">  
  <meta property="fb:pages" content="942699125901506"> 
  
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="https://shariainvestor.com">
  <meta name="twitter:creator" content="Sharia Investor">
  <meta name="twitter:title" content="<?= $this->title; ?>">
  <meta name="twitter:description" content="<?= strip_tags(BaseStringHelper::explode(Yii::$app->view->params['description'],'</p>')[0].'</p>'); ?>">
  <meta name="twitter:image" content="https://shariainvestor.com/img/display.png"> 
  <link rel="canonical" href="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"> 
  <link rel="amphtml" href="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"> 
  <link rel="manifest" href="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"> 
  
  
    <!-- main -->  
  <script src="<?= BaseUrl::base();?>/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= BaseUrl::base() ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= BaseUrl::base() ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= BaseUrl::base() ?>/bower_components/Ionicons/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= BaseUrl::base();?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?= BaseUrl::base();?>/bower_components/datatables.net-bs/css/select.dataTables.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= BaseUrl::base();?>/bower_components/select2/dist/css/select2.min.css">
    
  <style>
      
    @font-face {
        font-family: bree-serif;
        src: url(<?= BaseUrl::base();?>/fonts/BreeSerif-Regular.otf);
    } 
    @font-face {
        font-family: pt-serif;
        src: url(<?= BaseUrl::base();?>/fonts/PT-Serif-Regular.ttf);
    } 
    body {
        color: #333;
        font-family: 'Open Sans', sans-serif;
        font-size: 18px;
        font-size: 1.8rem;
        -webkit-font-smoothing: antialiased;
        font-weight: 400;
        line-height: 1.625;
    }
    h3 {
        font-family: 'Open Sans',bree-serif,serif;
        font-weight: 600;
        line-height: 1.2;
        margin: 10px 0 10px;
    }
    .logo-small {
      color: #f4511e;
      font-size: 50px;
    }
    .logo {
      color: #f4511e;
      font-size: 200px;
    }
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
    
    .jumbotron {
      background-color: #f4511e;
      color: #fff;
      font-family: Montserrat, sans-serif;            
    }
    
    .bg-grey {
      background-color: #F5F5F5;
    }
    
    .centering{
        float: none;
        margin: 0 auto;
    }
    
    footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
    }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
 
<!-- facebook -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2&appId=458278107551122&autoLogAppEvents=1"></script>

<!-- loading icon -->
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

<amp-auto-ads type="adsense" data-ad-client="ca-pub-3744700612400365"></amp-auto-ads>

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