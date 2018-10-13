<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\CategoryModel;
use yii\helpers\Url;

class CategoryController extends Controller
{
    
    public function actionIndex()
    {
    	$model = new CategoryModel();
    	
    	$mas = $model->getDirs('models');
    	$photo = $model->getPhoto();
        return $this->render('index', ['dir' => $mas, 'photo' => $photo, 'titlePage' => 'Модели']);
    }

    public function actionProject()
    {
    	$model = new CategoryModel();
    	
    	$mas = $model->getDirs('projects');
    	$photo = $model->getPhoto();
        return $this->render('index', ['dir' => $mas, 'photo' => $photo, 'titlePage' => 'Проекты']);
    }
}
