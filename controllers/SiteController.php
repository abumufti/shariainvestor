<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\MuvtiEmiten;
use yii\helpers\BaseUrl;
use app\models\MuvtiFundamental;
use app\models\MuvtiPost;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        Yii::$app->view->params['selected'] = ['','','','',''];
        
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
    public function actionIndex()
    {
        Yii::$app->view->params['selected'][0]='active';
        
        $gainers = MuvtiEmiten::find()->limit(5)->orderBy(["margin"=> SORT_DESC] )->all();
        
        $losers = MuvtiEmiten::find()->limit(5)->orderBy("margin")->all();
        
        $posts = MuvtiPost::find()->where(['status'=>'Active'])->limit(3)->orderBy(["date_created"=> SORT_DESC])->all();
        
        return $this->render('index',['gainers'=>$gainers,'losers'=>$losers,'posts'=>$posts]);
    }

    /**
     * Displays recommended page.
     *
     * @return string
     */
     /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIssi()
    {
        Yii::$app->view->params['selected'][1]='active';
        Yii::$app->view->params['issi']=['','',''];
        
        $table='table2';
        if(Yii::$app->request->get("order") ==="desc"){
            Yii::$app->view->params['issi'][1]='active';
            $data = MuvtiFundamental::find()->joinWith('emiten')->where("muvti_emiten.margin > 0")->orderBy(["muvti_emiten.margin"=> SORT_DESC])->all();
        }elseif(Yii::$app->request->get("order") ==="asc"){
            Yii::$app->view->params['issi'][2]='active';
            $data = MuvtiFundamental::find()->joinWith('emiten')->where("muvti_emiten.margin < 0")->orderBy(["muvti_emiten.margin"=> SORT_ASC])->all();
        }else{
            Yii::$app->view->params['issi'][0]='active';
            $data = MuvtiFundamental::find()->all();
            $table='table1';
        }
        
        return $this->render('issi',['data'=>$data,'table'=>$table]);
    }
    
        /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionBlog()
    {
        Yii::$app->view->params['selected'][2]='active';
        
        $title = trim(Yii::$app->request->get("title"));
        
        $gainers = MuvtiEmiten::find()->limit(5)->orderBy(["margin"=> SORT_DESC] )->all();
        
        $losers = MuvtiEmiten::find()->limit(5)->orderBy("margin")->all();
        
        if($title !=''){
            
            $posts = MuvtiPost::find()->where(["title"=>$title,'status'=>'Active'])->all();
            
        }else{
            
            $posts = MuvtiPost::find()->where(['status'=>'Active'])->limit(5)->orderBy(["date_created"=> SORT_DESC])->all();
        }
        return $this->render('blog',['gainers'=>$gainers,'losers'=>$losers, 'posts'=>$posts, 'title'=>$title]);
        
    }
    
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        Yii::$app->view->params['selected'][3]='active';
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', ['model' => $model]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        Yii::$app->view->params['selected'][4]='active';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $site = BaseUrl::base().'/user/dashboard';
            return $this->redirect($site, 301);
        }

        $model->password = '';
        return $this->render('login', ['model' => $model]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionDownload()
    {
        $path = Yii::$app->request->get('path');
        $explode = explode('/',$path);

        return Yii::$app->response->sendFile($path,$explode[2],['inline'=>true]);
    }
}
