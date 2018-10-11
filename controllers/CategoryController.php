<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\CategoryModel;

class CategoryController extends Controller
{
    
    public function actionIndex()
    {
    	$model = new CategoryModel();
    	$dir = scandir(getcwd());
    	$new_dir = chdir($dir[6]);
        return $this->render('index', ['dir' => scandir($new_dir)]);
    }
}
