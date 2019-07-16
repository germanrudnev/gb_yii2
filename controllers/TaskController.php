<?php
namespace app\controllers;

use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionCreate()
    {
        return $this->render('index', ['model' => new TaskCreate()]);
    }
}
