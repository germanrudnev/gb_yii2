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
        return $this->render('create/index', ['model' => new TaskCreate()]);
    }
    
    public function actionSubmit()
    {
        $formModel = new TaskCreate();
        $formModel->load(\Yii::$app->request->post());
        return $this->render('create/submit', ['model' => $formModel]);
    }
}
