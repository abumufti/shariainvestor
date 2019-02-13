<?php

namespace app\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\MuvtiFundamental;

class EmitenController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
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
    public function actionAll()
    {
        $data = MuvtiFundamental::find()->all();
        
        return $this->render('index',['data'=>$data]);
    }
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndexed()
    {
        $data = MuvtiFundamental::find()->where("muvti_emiten.idx IS NOT NULL")->joinWith('emiten')->all();
        
        return $this->render('indexed',['data'=>$data]);
    }
    
    /**
     * Displays recommended page.
     *
     * @return string
     */
    public function actionUnderValue()
    {
        $data = MuvtiFundamental::find()->where("per > 0 AND per <=10 AND muvti_emiten.idx IS NOT NULL")->joinWith('emiten')->all();
        
        return $this->render('undervalue',['data'=>$data]);
    }
    
}
