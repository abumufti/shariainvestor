<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\helpers\BaseUrl;
use app\models\PostForm;
use app\models\MuvtiPost;
use yii\web\UploadedFile;

class PostController extends Controller
{
    public $layout ='dashboard';
    
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {          
        Yii::$app->view->params['tree'] = ['','active','','','','','',''];   
        
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['logout','compose','view','edit'],
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
    public function actionCompose()
    {
        Yii::$app->view->params['header'] =$this->getHeader();
        Yii::$app->view->params['footer'] =$this->getFooter();
        Yii::$app->view->params['page'] ='Post';
        Yii::$app->view->params['subpage'] ='Insert';
        Yii::$app->view->params['selected'] = ['','','','','','active','','','','','','',];
        $id = trim(Yii::$app->request->get("id"));
         
        $model = new PostForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->upload()) {
            
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->file = UploadedFile::getInstance($model, 'file');
            
            return $this->refresh();
            
        }
        
        return $this->render('compose',['model'=>$model]);
    }
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionEdit()
    {
        Yii::$app->view->params['header'] =$this->getHeader();
        Yii::$app->view->params['footer'] =$this->getFooter();
        Yii::$app->view->params['page'] ='Post';
        Yii::$app->view->params['subpage'] ='Insert';
        Yii::$app->view->params['selected'] = ['','','','','','active','','','','','','',];
        $id = trim(Yii::$app->request->get("id"));
         
        $model = new PostForm();
        
        $post = MuvtiPost::findOne($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->upload()) {
            
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->file = UploadedFile::getInstance($model, 'file');
            
            return $this->refresh();
            
        }
        
        return $this->render('edit',['model'=>$model,'post'=>$post]);
    }
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionView()
    {
        Yii::$app->view->params['header'] =$this->getHeader2();
        Yii::$app->view->params['footer'] =$this->getFooter2();
        Yii::$app->view->params['page'] ='Post';
        Yii::$app->view->params['subpage'] ='View';        
        Yii::$app->view->params['selected'] = ['','','','','','','active','','','','','',];
        
        $data = MuvtiPost::find()->orderBy(['id' => SORT_DESC])->all();
        
        return $this->render('view',['data'=>$data]);
    }
    
        /**
     * GetHeader action.
     *
     * @return Response
     */
    private function getHeader()
    {
        $header='
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="'. BaseUrl::base().'/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">';

        return $header;
    }
    
    private function getHeader2(){
        
        $header='
        <!-- DataTables -->
        <link rel="stylesheet" href="'. BaseUrl::base().'/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">';
        
        return $header;
    }
    
    /**
     * getFooter action.
     *
     * @return Response
     */
    private function getFooter()
    {
        $footer='
        <!-- CK Editor -->
        <script src="'. BaseUrl::base().'/bower_components/ckeditor/ckeditor.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="'. BaseUrl::base().'/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace(\'editor1\')
            //bootstrap WYSIHTML5 - text editor
            $(\'.textarea\').wysihtml5()
        })
        </script>';
        
        return $footer;
    }
    
    private function getFooter2(){
        
        $footer='
        <!-- DataTables -->
        <script src="'. BaseUrl::base().'/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="'. BaseUrl::base().'/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $(\'#example1\').DataTable()
                $(\'#example2\').DataTable({
                    \'paging\'      : true,
                    \'lengthChange\': false,
                    \'searching\'   : false,
                    \'ordering\'    : true,
                    \'info\'        : true,
                    \'autoWidth\'   : false
                })
            })
        </script>';
        
        return $footer;
        
    }
}
