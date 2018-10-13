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

    public function actionProjects()
    {
    	$model = new CategoryModel();
    	
    	$mas = $model->getDirs('projects');
    	$photo = $model->getPhoto();
        return $this->render('index', ['dir' => $mas, 'photo' => $photo, 'titlePage' => 'Проекты']);
    }

    public function actionSingle($uri, $id){
    	$model = new CategoryModel();
    	
    	$mas = $model->getDirs($uri);
    	$photos = $model->getPhotos($id);
        return $this->render('index', ['dir' => $photos, 'photo' => $photos, 'titlePage' => 'Проекты' ,'id' => $id]);
    }
}
