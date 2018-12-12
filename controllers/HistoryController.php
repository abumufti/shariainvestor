<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\MuvtiHistory;
use app\models\MuvtiBuy;
use yii\helpers\BaseUrl;


class HistoryController extends Controller
{
    public $layout ='dashboard';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        Yii::$app->view->params['tree'] = ['','','','','active','','',''];   
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
    
    public function actionAll(){
        
        Yii::$app->view->params['subpage'] ='History';
        Yii::$app->view->params['selected'] = ['','','','','','','','','','','active',''];
        
        $history = MuvtiHistory::find()->orderBy(['id' => SORT_DESC])->all();
        
        return $this->render('all',['history'=>$history]);
        
    }
    
    public function actionBuy(){
        
        Yii::$app->view->params['subpage'] ='History';
        Yii::$app->view->params['selected'] = ['','','','','','','','','','','','active'];
        
        $buy = MuvtiBuy::find()->orderBy(['id' => SORT_DESC])->all();
        
        return $this->render('buy',['buy'=>$buy]);
        
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
                
            $("#example").DataTable({
                "select": {
                    style:"single",
                },
            });
                
            function watchList(){
                var table = $("#history").DataTable();
                var allData = table.rows({ selected: true }).data();
                console.log(allData);
            }
            
        </script>';
        
        return $footer;
        
    }

}