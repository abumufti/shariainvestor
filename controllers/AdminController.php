<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\MuvtiSector;
use app\models\MuvtiSubsector;
use app\models\MuvtiCategory;
use app\models\MuvtiEmiten;
use app\models\SectorForm;
use app\models\SubSectorForm;
use app\models\CategoryForm;
use app\models\EmitenForm;
use app\models\EmailForm;
use app\models\FinancialForm;
use yii\helpers\BaseUrl;
use yii\web\UploadedFile;


class AdminController extends Controller
{
    public $layout ='dashboard';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {        
        Yii::$app->view->params['tree'] = ['active','','','','','','',''];   
        Yii::$app->view->params['header'] =$this->getHeader();
        Yii::$app->view->params['footer'] =$this->getFooter();
        Yii::$app->view->params['page'] ='Admin';        
        
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['category','emiten','financial','sector','dashboard'],
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
    public function actionCategory()
    {        
        Yii::$app->view->params['subpage'] ='Category';
        Yii::$app->view->params['selected'] = ['','active','','','','','','','','','','',];
        
        $data = MuvtiCategory::find()->all();
        
        $model = new CategoryForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->insert()) {
            
            Yii::$app->session->setFlash('emitenFormSubmitted');
            
            return $this->refresh();
            
        }
        
        return $this->render('category',['data'=>$data, 'model'=>$model]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionSector()
    {
        Yii::$app->view->params['subpage'] ='Sector & Subsector';
        Yii::$app->view->params['selected'] = ['','','active','','','','','','','','','',];
        
        $sector = MuvtiSector::find()->all();
        
        $subsector = MuvtiSubsector::find()->joinWith('sector')->all();
        
        $model = new SectorForm();
        
        $model2 = new SubSectorForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->insert()) {
            
            Yii::$app->session->setFlash('emitenFormSubmitted');
            
            return $this->refresh();
            
        }
        
        if ($model2->load(Yii::$app->request->post()) && $model2->insert()) {
            
            Yii::$app->session->setFlash('emitenFormSubmitted');
            
            return $this->refresh();
            
        }
        
        return $this->render('sector',['sector'=>$sector,'subsector'=>$subsector, 'model'=>$model, 'model2'=>$model2]);
    }
    
    
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionEmiten()
    {              
        Yii::$app->view->params['subpage'] ='Emiten';
        Yii::$app->view->params['selected'] = ['','','','active','','','','','','','','',];
        
        $index = MuvtiCategory::find()->all();
        
        $model = new EmitenForm();
        
        if ($model->load(Yii::$app->request->post())) {
            
            $model->excelFile = UploadedFile::getInstance($model, 'excelFile');
            
        }

        if ($model->upload() && $model->insertFilter()) {
            Yii::$app->session->setFlash('emitenFormSubmitted');
            
            return $this->refresh();
        }
        
        $data = MuvtiEmiten::find()->all();
        
        return $this->render('emiten',['index'=>$index,'model'=>$model, 'data'=>$data]);
    }
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionFinancial()
    {
        Yii::$app->view->params['subpage'] ='Financial';
        Yii::$app->view->params['selected'] = ['','','','','active','','','','','','','',];
        
        Yii::$app->view->params['header'] =$this->getHeader();
        Yii::$app->view->params['footer'] =$this->getFooter();
        
        $data = MuvtiEmiten::find()->all();
        
        $sector = MuvtiSector::find()->all();
        
        $subsector = MuvtiSubsector::find()->all();
        
        $model = new FinancialForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->insert()) {
            
            Yii::$app->session->setFlash('emitenFormSubmitted');
            
            return $this->refresh();
            
        }
        
        return $this->render('financial',['data'=>$data, 'model'=>$model, 'sector'=>$sector, 'subsector'=>$subsector]);
    }
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionDashboard()
    {        
        Yii::$app->view->params['page'] ='Dashboard';
        Yii::$app->view->params['subpage'] ='';
        Yii::$app->view->params['selected'] = ['active','','','','','','','','','','','',];
        
        $model3 = new EmailForm();
        
        if ($model3->load(Yii::$app->request->post()) && $model3->send()) {
            return $this->refresh();
            
        }
        
        return $this->render('dashboard',['model3'=>$model3]);
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
        
            $(function () {
                
                $("#financialform-emiten").change(function(){ 
                    $.get("'.BaseUrl::base().'/emitens/"+this.value,function(data, status){
                        $("#financialform-quarter").val(data.quarter).change();
                        $("#financialform-liability").val(data.liability);
                        $("#financialform-share").val(data.share);
                        $("#financialform-equity").val(data.equity);
                        $("#financialform-dividen").val(data.dividen);
                        $("#financialform-profit").val(data.profit);
                        $("#financialform-currency").val(data.currency);
                        $("#financialform-sector").val(data.sector_id).change();
                        $("#financialform-subsector").val(data.subsector_id).change();
                    });
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
            
                $("#example2").DataTable();
                $("#example3").DataTable({
                    "paging"      : true,
                    "lengthChange": true,
                    "searching"   : true,
                    "ordering"    : true,
                    "info"        : true,
                    "autoWidth"   : true,
                    "scrollX"     : "200px",
                    "scrollCollapse": true,
                });
                $("#example4").DataTable({
                    "paging"      : true,
                    "lengthChange": true,
                    "searching"   : true,
                    "ordering"    : true,
                    "info"        : true,
                    "autoWidth"   : true,
                    "scrollX"     : "200px",
                    "scrollCollapse": true,
                });
                $(".select2").select2();
               
                
            })
        </script>';
        
        return $footer;
        
    }

       
    
}
