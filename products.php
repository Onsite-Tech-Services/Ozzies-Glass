<?php
require_once 'includes/config.inc.php';
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Ozzie's Glass - Products</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <!--    <link rel="apple-touch-icon" href="apple-touch-icon.png">-->
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
    <script src="js/libs/modernizr-2.0.6.min.js"></script>

</head>
<body class="fade">
<div id="noJs">
    You must have JavaScript installed.
</div>
<div id="container" class="products">

    <?php
    $page = 'products';
    require_once 'includes/header.inc.php';
    ?>

    <div id="main" role="main">
        <h2>Select a category below to view product images.</h2>
        <a class="categoryLink" href="spoons.php">
            <div class="category">
                <img src="imgs/category_spoons.png" alt="Spoons">
                <div class="categoryText">
                    <h3 id="spoons" class="ir">Spoons</h3>
                    Spoons
                    Mouth and rush holes are good sized, deep bowls and thick as hell
                </div>
            </div>
        </a>
        <a class="categoryLink" href="bubblers.php">
            <div class="category">
                <img src="imgs/category_bubbler.png" alt="">
                <div class="categoryText">
                    <h3 id="bubblers" class="ir">Bubblers</h3>
                    Bubblers
                    Thick, stable/well standing deep bowl, large diameter down stem
                </div>
            </div>
        </a>
        <a class="categoryLink" href="dry.php">
            <div class="category">
                <img src="imgs/category_dry.png" alt="">
                <div class="categoryText">
                    <h3 id="dry" class="ir">Dry</h3>
                    Dry pieces
                    Onies and steamrollers
                    Same as water pips just no down stem and a little smaller.
                </div>
            </div>
        </a>
        <a class="categoryLink" href="animals.php">
            <div class="category">
                <img src="imgs/category_animal.png" alt="">
                <div class="categoryText">
                    <h3 id="animals" class="ir">Glass Animals</h3>
                    Glass animals
                    Animated, fun, user friendly. 
                </div>
            </div>
        </a>
        <a class="categoryLink" href="misc.php">
            <div class="category">
                <img src="imgs/category_assorted.png" alt="">
                <div class="categoryText">
                    <h3 id="assorted" class="ir">Assorted</h3>
                    Jars and stems
                    Thick, cork fits tightly in every jar. chillums/onie are fumed 2-4"s
                    With purchace orders over 1000$'s you will get 10 onies FREE  
                </div>
            </div>
        </a>
    </div>
    <h4>Thank you for visiting Ozzie's Glass.com</h4>
    <?php

    require_once 'includes/footer.inc.php';

    $admin = false;
    $ui = false;
    require_once('includes/scripts.inc.php');
    ?>
    <script defer src="js/plugins.js"></script>
    <script defer src="js/script.js"></script>

    <?php include_once 'includes/analytics.inc.php'; ?>
    <!--[if lt IE 8 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload', function () {
        CFInstall.check({mode:'overlay'})
    })</script>
    <![endif]-->

</body>
</html>