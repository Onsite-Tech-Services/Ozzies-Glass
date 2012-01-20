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
    <title>Ozzie's Glass - Misc. Glass</title>
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
									<li><a href="#"><img src="imgs/thumbs/5.jpg" data-large="imgs/5.jpg" alt="image05" data-description="And down I laid to list the sad-tuned tale" /></a></li>
									<li><a href="#"><img src="imgs/thumbs/6.jpg" data-large="imgs/6.jpg" alt="image06" data-description="Ere long espied a fickle maid full pale" /></a></li>
									<li><a href="#"><img src="imgs/thumbs/7.jpg" data-large="imgs/7.jpg" alt="image07" data-description="Tearing of papers, breaking rings a-twain" /></a></li>
									<li><a href="#"><img src="imgs/thumbs/8.jpg" data-large="imgs/8.jpg" alt="image08" data-description="Storming her world with sorrow's wind and rain" /></a></li>
									<li><a href="#"><img src="imgs/thumbs/9.jpg" data-large="imgs/9.jpg" alt="image09" data-description="Upon her head a platted hive of straw" /></a></li>
									<li><a href="#"><img src="imgs/thumbs/10.jpg" data-large="imgs/10.jpg" alt="image10" data-description="Which fortified her visage from the sun" /></a></li>
									<li><a href="#"><img src="imgs/thumbs/11.jpg" data-large="imgs/11.jpg" alt="image11" data-description="Whereon the thought might think sometime it saw" /></a></li>
									<li><a href="#"><img src="imgs/thumbs/12.jpg" data-large="imgs/12.jpg" alt="image12" data-description="The carcass of beauty spent and done" /></a></li>
									<li><a href="#"><img src="imgs/thumbs/13.jpg" data-large="imgs/13.jpg" alt="image13" data-description="Time had not scythed all that youth begun" /></a></li>
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

    <script> // Change UA-XXXXX-X to be your site's ID
    //  window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    //  Modernizr.load({
    //    load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    //  });
    </script>


    <!--[if lt IE 8 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload', function () {
        CFInstall.check({mode:'overlay'})
    })</script>
    <![endif]-->

</body>
</html>