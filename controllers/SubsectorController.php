<?php

namespace app\controllers;

use yii\rest\ActiveController;
use app\models\MuvtiSubsector;
use Yii;

class SubsectorController extends ActiveController
{
    public $modelClass = 'app\models\MuvtiSubsector';
    
    public function actions() 
    { 
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
}

    public function prepareDataProvider() 
    {
        return MuvtiSubsector::find()->where(["sector_id"=>Yii::$app->request->get('sector_id')])->all();
    }
}