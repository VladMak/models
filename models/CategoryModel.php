<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Url;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class CategoryModel extends Model
{
    private $dirName = '';

    /*
    Получаем фоток из этих директорий
    */
    public function getPhotos(){
        $masDirs = $this->getDirs();
        $masPhoto = [];
        for ($i=0; $i < count($masDirs); $i++) { 
            for ($j=2; $j < count(scandir(Url::to('img/starkids/' . $this->dirName . '/'  . $masDirs[$i]))); $j++) { 
                array_push($masPhoto, scandir(Url::to('img/starkids/' . $this->dirName . '/'  . $masDirs[$i]))[$j]);
            }
        }

        return $masPhoto;
    }

    public function getPhoto(){
        $masDirs = $this->getDirs();
        $photo = [];
        for ($i=0; $i < count($masDirs); $i++) { 
            for ($j=2; $j < 3; $j++) { 
                array_push($photo, scandir(Url::to('img/starkids/' . $this->dirName . '/' . $masDirs[$i]))[$j]);
            }
        }

        return $photo;
    }

    /*
    Получаем имена директорий
    */
    public function getDirs($dir = 'projects'){
        $this->dirName = $dir;
        // массив со всеми проектами
        $mas = [];
        // пробегаем по всем папкам и собераем названия папок
        for($i = 2; $i < count(scandir(Url::to('img/starkids/' . $dir))); $i++){
            array_push($mas, scandir(Url::to('img/starkids/' . $dir))[$i]);
        }
        return $mas;
    }
}
