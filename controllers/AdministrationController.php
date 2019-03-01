<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\MuvtiEmiten;
use app\models\MuvtiDividen;
use app\models\MuvtiDeposit;
use app\models\MuvtiBroker;
use app\models\BrokerForm;
use app\models\DepositForm;
use app\models\DividenForm;
use yii\helpers\BaseUrl;


class AdministrationController extends Controller
{
    public $layout ='dashboard';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        Yii::$app->view->params['page'] ='User';
        Yii::$app->view->params['subpage'] ='Administration';
        Yii::$app->view->params['tree'] = ['','','','active','','','',''];        
        Yii::$app->view->params['header'] =$this->getHeader();
        Yii::$app->view->params['footer'] =$this->getFooter();
        
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
    public function actionBroker()
    {
        Yii::$app->view->params['selected'] = ['','','','','','','','active','','','','',];
        
        $broker = MuvtiBroker::find()->orderBy(['name' => SORT_ASC])->all();
        
        $model = new BrokerForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->insert()) {
            Yii::$app->session->setFlash('feeFormSubmitted');           
            return $this->refresh();
        }
        
        return $this->render('broker',['broker'=>$broker,'model'=>$model]);
    }
    
    public function actionBank()
    {
        Yii::$app->view->params['selected'] = ['','','','','','','','','active','','','',];
        
        $deposit = MuvtiDeposit::find()->orderBy(['id' => SORT_DESC])->all();
        $emiten = MuvtiEmiten::find()->orderBy(['id' => SORT_DESC])->all();
        $dividen = MuvtiDividen::find()->all();
    
        $model = new DepositForm();
        $model2 = new DividenForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->insert()) {
            Yii::$app->session->setFlash('depositFormSubmitted');
            return $this->refresh();
        }
        
        if ($model2->load(Yii::$app->request->post()) && $model2->insert()) {
            Yii::$app->session->setFlash('dividenFormSubmitted');
            return $this->refresh();            
        }
        
        return $this->render('bank',['deposit'=>$deposit,'model'=>$model,'model2'=>$model2,'emiten'=>$emiten,'dividen'=>$dividen]);
    }
    
    public function actionDividen()
    {
        Yii::$app->view->params['selected'] = ['','','','','','','','','','active','','',''];
        
        $dividen = MuvtiDividen::findBySql('SELECT SUM(amount) AS amounts FROM muvti_dividen')->all();
        $dividen2 = MuvtiDividen::find()->all();
        $emiten = MuvtiEmiten::find()->all();
    
        $model3 = new DividenForm();
        
        if ($model3->load(Yii::$app->request->post()) && $model3->insert()) {
            Yii::$app->session->setFlash('dividenFormSubmitted');
            return $this->refresh();            
        }
        
        return $this->render('dividen',['emiten'=>$emiten,'dividen'=>$dividen,'dividen2'=>$dividen2, 'model3'=>$model3]);
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
            
            $("#example5").DataTable({
                "select": {
                    style:"single",
                },
            });
                
            $(".select2").select2();
               
            //Date picker
            $("#datepicker").datepicker({
                autoclose: true,
                format: \'yyyy-mm-dd\',
            });
    
        </script>';
        
        return $footer;
        
    }

}