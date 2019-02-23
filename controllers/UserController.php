<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\MuvtiEmiten;
use app\models\MuvtiPortofolio;
use app\models\MuvtiSell;
use app\models\MuvtiDividen;
use app\models\MuvtiDeposit;
use app\models\MuvtiFundamental;
use app\models\SellForm;
use app\models\BuyForm;
use app\models\MuvtiHistory;
use app\models\MuvtiBroker;
use yii\helpers\BaseUrl;



class UserController extends Controller
{
    public $layout ='dashboard';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        Yii::$app->view->params['selected'] = ['','','','','','','','','','','','',];
        Yii::$app->view->params['header'] =$this->getHeader();
        Yii::$app->view->params['footer'] =$this->getFooter();
        Yii::$app->view->params['page'] ='User';
        
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','dashboard'],
                'rules' => [
                    [
                        'actions' => ['logout','dashboard'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionDashboard()
    {
        Yii::$app->view->params['subpage'] ='Dashboard';
        Yii::$app->view->params['tree'] = ['','','active','','',''];
        
        $model = new BuyForm();
        
        MuvtiPortofolio::deleteAll('share = 0');
        $data = MuvtiPortofolio::find()->orderBy(['code' => SORT_ASC])->all();
        $sell = MuvtiSell::findBySql('SELECT SUM(margin) AS margins FROM muvti_sell')->all();
        $broker = MuvtiBroker::find()->orderBy(['name' => SORT_ASC])->all();
        $deposit = MuvtiDeposit::find()->orderBy(['id' => SORT_DESC])->one();
        $history = MuvtiHistory::find()->orderBy(['id' => SORT_DESC])->one();
        $dividen = MuvtiDividen::findBySql('SELECT SUM(amount) AS amounts FROM muvti_dividen')->all();
        $fundamental = MuvtiFundamental::find()->where(['watched' => 1])->all();
        $emiten = MuvtiEmiten::find()->all();
        $stocks = MuvtiFundamental::find()->all();
        
        $model2 = new SellForm();
        
        
        
        if ($model->load(Yii::$app->request->post()) && $model->insert()) {
            Yii::$app->session->setFlash('emitenFormSubmitted');
            return $this->refresh();
        }
        
        if ($model2->load(Yii::$app->request->post()) && $model2->insert()) {
            Yii::$app->session->setFlash('sellFormSubmitted');
            return $this->refresh();
        }

        return $this->render('dashboard',['data'=>$data,'broker'=>$broker,'stocks'=>$stocks, 'model'=>$model,'history'=>$history,'fundamental'=>$fundamental,'sell'=>$sell,'emiten'=>$emiten,'deposit'=>$deposit, 'model2'=>$model2,'dividen'=>$dividen]);
    }
   
    private function getHeader(){
        
        $header='
            
        <!-- Select2 -->
        <link rel="stylesheet" href="'. BaseUrl::base().'/bower_components/select2/dist/css/select2.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="'. BaseUrl::base().'/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="'. BaseUrl::base().'/bower_components/datatables.net-bs/css/select.dataTables.min.css">
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="'. BaseUrl::base().'/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <style>
        .btn-outline {
            border: 1px solid #fff;
            background: transparent;
            color: #fff;
        }
        </style>
        ';
        
        return $header;
    }
    
   private function getFooter(){
        
        $footer='
        <!-- Select2 -->
        <script src="'. BaseUrl::base().'/bower_components/select2/dist/js/select2.full.min.js"></script>
        <!-- DataTables -->
        <script src="'. BaseUrl::base().'/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="'. BaseUrl::base().'/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="'. BaseUrl::base().'/bower_components/datatables.net/js/dataTables.select.min.js"></script>
        <!-- bootstrap datepicker -->
        <script src="'. BaseUrl::base().'/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- FastClick -->
        <script src="'. BaseUrl::base().'/bower_components/fastclick/lib/fastclick.js"></script>
        <script>
        
            function sell(id){
                
                $.get("'.BaseUrl::base().'/portofolios/"+id,function(data, status){
                    
                    var table = $("#example1").DataTable();
                    var allData = table.rows({ selected: true }).data();
                    var buyid = data.id;
                    var code = data.code;
                    var sell = allData[0][2].replace(",","");
                    var sellfee= data.sell_fee;
                    var lot = data.share/100;
                    var buy = allData[0][1].replace(",","");
                    var buyfee = data.buy_fee;
                    var shares = data.share;
                    var margin = (sell*(1-sellfee/100)-buy*(1+buyfee/100))*shares; 
                    var percentage = ((sell*(1-sellfee/100)-buy*(1+buyfee/100))/buy)*100;
                    
                    $("#sellform-emiten").val(code);
                    $("#sellform-buy").val(buy);
                    $("#sellform-buyfee").val(buyfee);
                    $("#sellform-lot").val(lot);
                    $("#sellform-buyid").val(buyid);
                    $("#sellform-sell").val(sell);
                    $("#sellform-sellfee").val(sellfee);
                    $("#sellform-margin").val(margin.toLocaleString("en"));
                    $("#sellform-percentage").val(percentage.toFixed(2));
                    
                });
            
            }
            
            function watchremove(code){ 
                
                $.ajax({
                    url: "'.BaseUrl::base().'/fundamentals/"+code,
                    type: "PUT",
                    data:{"watched":0},
                    success: function(response){
                        window.location =\''.BaseUrl::toRoute(["user/dashboard"]).'\';
                    }
                });
                               
                
            };
            
            $("#buyform-broker").change(function(){ 
            
                $.get("'.BaseUrl::base().'/brokers/"+this.value,function(data, status){
                    $("#buyform-buyfee").val(data.buy);
                    $("#buyform-sellfee").val(data.sell);
                });
            
            });

            $("#buyform-buy").mouseleave(function(){

                var budget = Math.floor(parseFloat($("#buyform-budget").val().replace(/,/g, "")));   
                var buyfee = parseFloat($("#buyform-buyfee").val()/100);
                var sellfee = parseFloat($("#buyform-sellfee").val()/100);
                var buy = parseFloat($("#buyform-buy").val()*(1+buyfee));
                var profit = parseFloat($("#buyform-profitpercentage").val()/100);
                var sell = Math.ceil(parseFloat(buy*(1+sellfee+profit)));
                var lot = buy == 0 ? 0 : Math.floor(parseFloat(budget/(buy*100)));
                
                $("#buyform-sell").val(sell);
                $("#buyform-lot").val(lot);
              
                
            });
            
            $("#buyform-budget").mouseleave(function(){
                                    
                var budget = Math.floor(parseFloat($("#buyform-budget").val().replace(/,/g, "")));   
                var buyfee = parseFloat($("#buyform-buyfee").val()/100);
                var sellfee = parseFloat($("#buyform-sellfee").val()/100);
                var buy = parseFloat($("#buyform-buy").val()*(1+buyfee));
                var profit = parseFloat($("#buyform-profitpercentage").val()/100);
                var sell = Math.ceil(parseFloat(buy*(1+sellfee+profit)));
                var lot = buy == 0 ? 0 : Math.floor(parseFloat(budget/(buy*100)));
                
                $("#buyform-sell").val(sell);
                $("#buyform-lot").val(lot);
                               
            });
            
            $("#buyform-profitpercentage").mouseleave(function(){
                                    
                var budget = Math.floor(parseFloat($("#buyform-budget").val().replace(/,/g, "")));   
                var buyfee = parseFloat($("#buyform-buyfee").val()/100);
                var sellfee = parseFloat($("#buyform-sellfee").val()/100);
                var buy = parseFloat($("#buyform-buy").val()*(1+buyfee));
                var profit = parseFloat($("#buyform-profitpercentage").val()/100);
                var sell = Math.ceil(parseFloat(buy*(1+sellfee+profit)));
                var lot = buy == 0 ? 0 : Math.floor(parseFloat(budget/(buy*100)));
                
                $("#buyform-sell").val(sell);
                $("#buyform-lot").val(lot);
                
            });
            
            
                
            $("#example").DataTable({
                "paging"      : true,
                "lengthChange": true,
                "searching"   : true,
                "ordering"    : true,
                "info"        : true,
                "autoWidth"   : true,
                "scrollX"     : "200px",
                "scrollCollapse": true,
                "select": {
                    style:"single",
                },
            });
                
            $("#example1").DataTable({
                "paging"      : true,
                "lengthChange": true,
                "searching"   : true,
                "ordering"    : true,
                "info"        : true,
                "autoWidth"   : true,
                "scrollX"     : "200px",
                "scrollCollapse": true,
                "select": {
                    style:"single",
                },
            });
            
             $("#example5").DataTable({
                "paging"      : true,
                "lengthChange": true,
                "searching"   : true,
                "ordering"    : true,
                "info"        : true,
                "autoWidth"   : false,
                "scrollX"     : "200px",
                "scrollCollapse": true,
                "select": {
                    style:"single",
                },
            });
            
            $("#watchlist").DataTable({
                "paging"      : true,
                "lengthChange": true,
                "searching"   : false,
                "ordering"    : true,
                "info"        : true,
                "autoWidth"   : true,
                "scrollX"     : "200px",
                "scrollCollapse": true,
                "select": {
                    style:"multi",
                },
            });
                
            $("#example2").DataTable({
                "paging"      : false,
                "lengthChange": false,
                "searching"   : false,
                "ordering"    : false,
                "info"        : false,
                "autoWidth"   : false,
                "scrollX"     : "200px",
                "scrollCollapse": true,
                "select": {
                    style:"single",
                },
            });
                
            $("#example3").DataTable({
                "paging"      : true,
                "lengthChange": true,
                "searching"   : false,
                "ordering"    : true,
                "info"        : false,
                "autoWidth"   : false,
                "scrollX"     : "200px",
                "scrollCollapse": true,
                "select": {
                    style:"single",
                },
            });
                
            $("#history").DataTable({
                "paging"      : true,
                "lengthChange": true,
                "searching"   : true,
                "ordering"    : true,
                "info"        : false,
                "autoWidth"   : false,
                "scrollCollapse": true,
                "columnDefs": [ {
                    "orderable": false,
                    "className": "select-checkbox",
                    "targets":   0
                } ],
                "select": {
                    "style":    "multi",
                    "selector": "td:first-child"
                },
                "order": [[ 1, "asc" ]]
            });
                
            $("#watch").click(function(){
                var table = $("#history").DataTable();
                var allData = table.rows({ selected: true }).data();
                
                $.each(allData, function( index, value) {
                    
                    $.ajax({
                        url: "'.BaseUrl::base().'/fundamentals/"+value[1],
                        type: "PUT",
                        data:{"watched":1},
                        success: function(response) {
                            if(allData.length-- <=1){
                                window.location =\''.BaseUrl::toRoute(["user/dashboard"]).'\';
                            }
                        }
                    });
                    
                });
                
                //
            });
                
            $(".select2").select2();
               
            //Date picker
            $("#datepicker").datepicker({
                autoclose: true,
                format: \'yyyy-mm-dd\',
            });
    
            $("#datepicker2").datepicker({
                autoclose: true,
                format: \'yyyy-mm-dd\',
            });
            
            $("#datepicker3").datepicker({
                autoclose: true,
                format: \'yyyy-mm-dd\',
            });
                
            
        </script>';
        
        return $footer;
        
    }

}