<?php
namespace app\controllers;
use app\models\TaskCreate;
use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionCreate()
    {
        $model = \Yii::createObject(TaskCreate::class);
        return $this->render('index', compact('model'));
    }
}
