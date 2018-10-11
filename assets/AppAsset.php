<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
        'css/bootstrap.min.css',
        'https://use.fontawesome.com/releases/v5.3.1/css/all.css',
    ];
    public $js = [
        'js/jquery-3.3.1.slim.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/main.js',
    ];
    public $depends = [
        
    ];
}
