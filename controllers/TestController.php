<?php

namespace app\controllers;

use app\models\MyNewForm;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionForm()
    {
        $model = new MyNewForm();
        if ($model->load(\Yii::$app->request->post())) {
            var_dump($model);
        }
        return $this->render('myform', [
            'model' => $model
        ]);



    }


}