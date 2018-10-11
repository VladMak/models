<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
?>

<style type="text/css">

.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    border-radius: 20px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}

.gallery-container h1 {
    text-align: center;
    margin-top: 70px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    max-width: 800px;
    margin: 25px auto;
    color: #888;
    font-size: 18px;
}

.tz-gallery {
    padding: 40px;
}

.tz-gallery .lightbox img {
    width: 100%;
    margin-bottom: 30px;
    transition: 0.2s ease-in-out;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}


.tz-gallery .lightbox img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
}

.tz-gallery img {
    border-radius: 4px;
}

.baguetteBox-button {
    background-color: transparent !important;
}


@media(max-width: 768px) {
    body {
        padding: 0;
    }

    .container.gallery-container {
        border-radius: 0;
    }
}
</style>


<div class="container gallery-container">

    <h1>Проекты</h1>
    
    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG">
                    <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG">
                    <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="../images/tunnel.jpg">
                    <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="../images/coast.jpg">
                    <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Coast">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="../images/rails.jpg">
                    <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Rails">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="../images/traffic.jpg">
                    <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Traffic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="../images/rocks.jpg">
                    <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Rocks">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="../images/benches.jpg">
                    <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Benches">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="../images/sky.jpg">
                    <img src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" alt="Sky">
                </a>
            </div>
        </div>

    </div>

</div>