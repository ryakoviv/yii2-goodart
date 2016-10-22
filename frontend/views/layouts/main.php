<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Good art</title>
<!--    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!----start-header---->
<div class="header">
    <div class="container">
        <div class="logo">

            <a href="<?= Url::toRoute(['index', '#' => 'home'])?>"><?= Html::img('@web/images/logo2.png');?></a>
        </div>
        <div class="menu">
            <a class="toggleMenu" href="#"><?= Html::img('@web/images/nav_icon.png');?></a>
            <ul class="nav" id="nav">
                <?php
                    if ($this->context->action->id==="index"){
                        $nav_class =  'scroll';
                    }
                    else{
                        $nav_class =  '';
                    }
                ?>
                <li class="current"><a href="<?= Url::toRoute(['index', '#' => 'home'])?>" class="<?=$nav_class?>">Домашня</a></li>
                <li><a href="<?= Url::toRoute(['index', '#' => 'about'])?>" class="<?=$nav_class?>">Про нас</a></li>
                <li><a href="<?= Url::toRoute(['index', '#' => 'services'])?>" class="<?=$nav_class?>">Наші послуги</a></li>
                <li><a href="<?= Url::toRoute(['index', '#' => 'work'])?>" class="<?=$nav_class?>">Портфоліо</a></li>
                <li><a href="<?= Url::toRoute(['index', '#' => 'price'])?>" class="<?=$nav_class?>">Ціни</a></li>
                <li><a href="<?= Url::toRoute(['index', '#' => 'contact'])?>" class="<?=$nav_class?>">Контакти</a></li>
                <li><a href="<?= Url::toRoute(['login'])?>">Увійти</a></li>
            </ul>
            <script type="text/javascript" src="js/responsive-nav.js"></script>
            <script type="text/javascript" src="js/move-top.js"></script>
            <script type="text/javascript" src="js/easing.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                    });
                });
            </script>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!----//End-header---->

    <?= $content ?>
<div class="footer">
    <div class="container">
        <div class="copy">
            <p>Goodart team &copy; 2016. All rights reserveds</p>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {

             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };


            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
