<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class CategoryModel extends Model
{
    /*
    Получаем фоток из этих директорий
    */
    public function getPhoto(){

    }

    /*
    Получаем имена директорий
    */
    public function getDirs(){
        return getcwd();
    }
}
