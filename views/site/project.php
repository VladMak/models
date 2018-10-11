<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
?>

<style type="text/css">

.gallery-container h1 {
    text-align: center;
    margin-top: 70px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
    color: #58595a;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 30px auto;
    font-size: 18px;
    color: #85878c;
}

.tz-gallery {
    padding: 40px;
}

.tz-gallery .thumbnail {
    padding: 0;
    margin-bottom: 30px;
    background-color: #fff;
    border-radius: 4px;
    border: none;
    transition: 0.15s ease-in-out;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}

.tz-gallery .thumbnail:hover {
    transform: translateY(-10px) scale(1.02);
}

.tz-gallery .lightbox img {
    border-radius: 4px 4px 0 0;
    width: 100%;
}

.tz-gallery .caption{
    padding: 26px 30px;
    text-align: center;
}

.tz-gallery .caption h3 {
    font-size: 14px;
    font-weight: bold;
    margin-top: 0;
}

.tz-gallery .caption p {
    font-size: 12px;
    color: #7b7d7d;
    margin: 0;
}

.baguetteBox-button {
    background-color: transparent !important;
}
    
</style>

<div class="container gallery-container">

    <h1>Модели</h1>
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="../images/park.jpg">
                        <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Park">
                    </a>
                    <div class="caption">
                        <h3>Проект такой-то</h3>
                        <p>Описание проекта</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="../images/bridge.jpg">
                        <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Bridge">
                    </a>
                    <div class="caption">
                        <h3>Проект такой-то</h3>
                        <p>Описание проекта</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="../images/tunnel.jpg">
                        <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Tunnel">
                    </a>
                    <div class="caption">
                        <h3>Проект такой-то</h3>
                        <p>Описание проекта</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="../images/coast.jpg">
                        <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Coast">
                    </a>
                    <div class="caption">
                        <h3>Проект такой-то</h3>
                        <p>Описание проекта</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="../images/rails.jpg">
                        <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Rails">
                    </a>
                    <div class="caption">
                        <h3>Проект такой-то</h3>
                        <p>Описание проекта</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="../images/traffic.jpg">
                        <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Traffic">
                    </a>
                    <div class="caption">
                        <h3>Проект такой-то</h3>
                        <p>Описание проекта</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
