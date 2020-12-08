<?php

namespace app\controllers;

use app\models\News;
use yii\rest\ActiveController;

class NewsController extends ActiveController
{
    public $modelClass = 'app\models\News';

//    public function actions()
//    {
//        $actions = parent::actions();
//
//        $actions['index']['prepareDataProvider'] = [$this, 'index'];
//
//
//        return $actions;
//    }

    public function actionIndex()
    {
        return News::find()->all();
    }
}