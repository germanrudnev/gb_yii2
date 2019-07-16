<?php

namespace app\controllers;
use app\models\TaskCreate;

class TaskAddController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['model' => TaskCreate()]);
    }

    public function actionSubmit()
    {
        return $this->render('submit');
    }

}
