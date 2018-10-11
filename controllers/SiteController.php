<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSchool(){
    	return $this->render('school');
    }

    public function actionContact(){
        return $this->render('contact');
    }

    public function actionProject(){
        return $this->render('project');
    }
}
