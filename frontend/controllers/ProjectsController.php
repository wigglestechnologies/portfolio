<?php

namespace frontend\controllers;

class ProjectsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionList(){
        return $this->render('list');
    }

}
