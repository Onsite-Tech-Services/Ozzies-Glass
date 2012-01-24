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
    <title>Ozzie's Glass</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
    <script src="js/libs/modernizr-2.0.6.min.js"></script>

</head>
<body>
<div id="noJs">
    You must have JavaScript installed.
</div>
<div id="container" class="home">

    <?php
        $page = 'home';
        require_once 'includes/header.inc.php';
    ?>

    <div id="main" role="main">
        <h2>Thank you for visiting Ozzie's Glass.com</h2>
        <div id="lineTop"></div>
        <p>
            Ozzie's Glass is focused on producing only the highest quality in blown glass. Established in 1997,
            Ozzie's Glass is leading the way and raising the bar in the art of glass. Our promise is to keep our
            standards as high as your expectations. Products do not leave our studio until all pieces have been
            hand inspected.
        </p>

        <p>
            With the knowledge and years of experience you can only expect to get the quality of glass that you deserve.
            Whether you are a retailer, or a consumer looking for that quality piece(s). Look no further, Ozzie's Glass
            is where quality meets affordability.
        </p>

        <p>
            Look through our product line by clicking the product button above. If you are a retailer, you can also request
            a wholesale price list by <a id="wholesaleRequest" href="contact.php">clicking here</a> and filling out the request form.
        </p>

        <div id="lineBottom"></div>
        <h3>Creativity is our passion, quality is our standard.</h3>
    </div>
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
      <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->

</body>
</html>