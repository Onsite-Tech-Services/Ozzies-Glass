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
    <title>Ozzie's Glass - Dry Pieces</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <!--    <link rel="apple-touch-icon" href="apple-touch-icon.png">-->
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
    <script src="js/libs/modernizr-2.0.6.min.js"></script>
    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
    			<div class="rg-image-wrapper">
    				{{if itemsCount > 1}}
    					<div class="rg-image-nav">
    						<a href="#" class="rg-image-nav-prev">Previous Image</a>
    						<a href="#" class="rg-image-nav-next">Next Image</a>
    					</div>
    				{{/if}}
    				<div class="rg-image"></div>
    				<div class="rg-loading"></div>
    				<div class="rg-caption-wrapper">
    					<div class="rg-caption" style="display:none;">
    						<p></p>
    					</div>
    				</div>
    			</div>
    		</script>
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
        <div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
									<li><a href="#"><img src="imgs/dry/tn/01.jpg" data-large="imgs/dry/01.jpg" alt="image01" data-description="" /></a></li>
									<li><a href="#"><img src="imgs/dry/tn/02.jpg" data-large="imgs/dry/02.jpg" alt="image02" data-description="" /></a></li>
									<li><a href="#"><img src="imgs/dry/tn/03.jpg" data-large="imgs/dry/03.jpg" alt="image03" data-description="" /></a></li>
									<li><a href="#"><img src="imgs/dry/tn/04.jpg" data-large="imgs/dry/04.jpg" alt="image04" data-description="" /></a></li>
									<li><a href="#"><img src="imgs/dry/tn/05.jpg" data-large="imgs/dry/05.jpg" alt="image05" data-description="" /></a></li>
									<li><a href="#"><img src="imgs/dry/tn/06.jpg" data-large="imgs/dry/06.jpg" alt="image06" data-description="" /></a></li>
									<li><a href="#"><img src="imgs/dry/tn/07.jpg" data-large="imgs/dry/07.jpg" alt="image07" data-description="" /></a></li>
									<li><a href="#"><img src="imgs/dry/tn/13.jpg" data-large="imgs/dry/13.jpg" alt="image13" data-description="" /></a></li>
									<li><a href="#"><img src="imgs/dry/tn/14.jpg" data-large="imgs/dry/14.jpg" alt="image14" data-description="" /></a></li>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->




    </div>
    <?php

    require_once 'includes/footer.inc.php';

    $admin = false;
    $ui = false;
    require_once('includes/scripts.inc.php');
    ?>
    <script type="text/javascript" src="js/libs/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="js/libs/jquery.elastislide.js"></script>
    <script type="text/javascript" src="js/libs/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/libs/gallery.js"></script>
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