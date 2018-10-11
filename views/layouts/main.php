<?php

use yii\helpers\Html;
use app\assets\AppAsset;
use app\models\Header;
use app\models\Menu;
use app\models\Footer;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--     -->

    <?= Html::csrfMetaTags() ?>
    <title>STAR KIDS</title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <?php
    $header = Header::find()->all();
    $menu = Menu::find()->all();
    $footer = Footer::find()->all();
    ?>
    <header class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid logo" src="<?php echo Url::base().'/'.$header[0]['logo']; ?>" alt="Logo">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 header_numbers">
                        <div>
                            <span class="number"><i class="fas fa-phone"></i><?php echo $header[0]['first_number']; ?></span>
                        </div>
                        <div>
                            <span class="desc"><?php echo $header[0]['first_desc']; ?></span>
                        </div>
                    </div>
                    <div class="col-md-4 header_numbers">
                        <div>
                            <span class="number"><i class="fas fa-phone"></i><?php echo $header[0]['second_number']; ?></span>
                        </div>
                        <div>
                            <span class="desc"><?php echo $header[0]['second_desc']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light main_nav_new">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <?php
                                    for($i = 0; $i < count($menu); $i++){ 
                                        ?>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="<?php echo Url::to([$menu[$i]['link']]); ?>"><?php echo $menu[$i]['title']; ?></a>
                                        </li>
                                        <?php 
                                    }
                                    ?>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <?= $content ?>

    <footer>
        <div class="container-fluid">
            <div class="row first_div_in_footer">
                <div class="col-md-2">
                    <img src="<?php echo Url::base().'/'.$footer[0]['logo']; ?>" class="img-fluid logo" alt="Logo">
                </div>
                <div class="col-md-4 footer_numbers">
                    <div>
                        <i class="fas fa-phone"></i><span class="number"><?php echo $footer[0]['first_number']; ?></span>
                    </div>
                    <div>
                        <span class="desc"><?php echo $footer[0]['first_desc']; ?></span>
                    </div>
                </div>
                <div class="col-md-4 footer_numbers">
                    <div>
                        <i class="fas fa-phone"></i><span class="number"><?php echo $footer[0]['second_number']; ?></span>
                    </div>
                    <div>
                        <span class="desc"><?php echo $footer[0]['second_desc']; ?></span>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
            <div class="row copyright div_violet">
                <div class="col-md-4">
                    <span style="color:white;"><?php echo $footer[0]['copyright']; ?></span>
                </div>
                <div class="col-md-4">
                    <span style="color: white;"><?php echo $footer[0]['author']; ?></span>
                </div>
            </div>
        </div>
    </footer>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>