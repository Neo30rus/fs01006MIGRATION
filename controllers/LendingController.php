<?php

namespace app\controllers;

use yii\web\Controller;

class LendingController extends Controller
{
    public $layout='lending';
    public function actionFeatures()
    {
        return $this->render('features');
    }
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionWhy()
    {
        return $this->render('why');
    }
    public function actionTeam()
    {
        return $this->render('team');
    }
    public function actionComment()
    {
        return $this->render('comment');
    }
    public function actionBlog()
    {
        return $this->render('blog');
    }


}