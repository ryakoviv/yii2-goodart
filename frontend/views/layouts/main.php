<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!--<script>-->
<!--    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){-->
<!--            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),-->
<!--        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)-->
<!--    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');-->
<!--    ga('create', 'UA-30027142-1', 'w3layouts.com');-->
<!--    ga('send', 'pageview');-->
<!--</script>-->
<!--<script async type='text/javascript' src='//cdn.fancybar.net/ac/fancybar.js?zoneid=1502&serve=C6ADVKE&placement=w3layouts' id='_fancybar_js'></script>-->


<!----start-header---->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="images/logo2.png" alt=""></a>
        </div>
        <div class="menu">
            <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
            <ul class="nav" id="nav">
                <li class="current"><a href="#home" class="scroll">Home</a></li>
                <li><a href="#about" class="scroll">About</a></li>
                <li><a href="#services" class="scroll">Services</a></li>
                <li><a href="#work" class="scroll">Work</a></li>
                <li><a href="#contact" class="scroll">Contact</a></li>
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
<!----- start-banner---->
<div class="banner text-center" id="home">
    <div class="container">
        <div class="banner-info">
            <a class="banner-btn" href="#"><span> </span></a>
            <h1>Good art</h1>
            <h2>художня майстерня</h2>
            <p>Художник – це не той, в кого є натхнення, а той, хто здатний надихнути інших.</p>
<!--            <a href="#" class="banner_btn">Lorem Ipsum</a>-->
        </div>
    </div>
</div>
<!----- //End-banner---->
<div class="main">
    <?= $content ?>
</div>
<div class="footer">
    <div class="container">
        <div class="copy">
            <p>Copyright &copy; 2014 Celestial. All rights reserved | Template by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
