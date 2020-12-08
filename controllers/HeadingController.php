<?php

namespace app\controllers;

use app\models\Heading;
use yii\db\ActiveQuery;
use yii\rest\ActiveController;

class HeadingController extends ActiveController
{
    public $modelClass = 'app\models\Heading';

    public function actions()
    {
        $actions = parent::actions();

        unset($actions['index'], $actions['create']);

        return $actions;
    }

    public function actionIndex()
    {
        return Heading::find()->with(['headings.headings.headings'])->groupBy('id')->asArray()->all();
    }
}