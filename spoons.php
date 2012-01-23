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
    <title>Ozzie's Glass - Spoons</title>
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
                                    <li><a href="#"><img src="imgs/spoons/tn/01.jpg" data-large="imgs/spoons/01.jpg" alt="image01" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/02.jpg" data-large="imgs/spoons/02.jpg" alt="image02" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/03.jpg" data-large="imgs/spoons/03.jpg" alt="image03" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/04.jpg" data-large="imgs/spoons/04.jpg" alt="image04" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/05.jpg" data-large="imgs/spoons/05.jpg" alt="image05" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/06.jpg" data-large="imgs/spoons/06.jpg" alt="image06" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/07.jpg" data-large="imgs/spoons/07.jpg" alt="image07" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/08.jpg" data-large="imgs/spoons/08.jpg" alt="image08" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/09.jpg" data-large="imgs/spoons/09.jpg" alt="image09" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/10.jpg" data-large="imgs/spoons/10.jpg" alt="image10" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/11.jpg" data-large="imgs/spoons/11.jpg" alt="image11" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/12.jpg" data-large="imgs/spoons/12.jpg" alt="image12" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/13.jpg" data-large="imgs/spoons/13.jpg" alt="image13" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/14.jpg" data-large="imgs/spoons/14.jpg" alt="image14" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/15.jpg" data-large="imgs/spoons/15.jpg" alt="image15" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/16.jpg" data-large="imgs/spoons/16.jpg" alt="image16" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/17.jpg" data-large="imgs/spoons/17.jpg" alt="image17" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/18.jpg" data-large="imgs/spoons/18.jpg" alt="image18" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/19.jpg" data-large="imgs/spoons/19.jpg" alt="image19" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/20.jpg" data-large="imgs/spoons/20.jpg" alt="image20" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/21.jpg" data-large="imgs/spoons/21.jpg" alt="image21" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/22.jpg" data-large="imgs/spoons/22.jpg" alt="image22" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/23.jpg" data-large="imgs/spoons/23.jpg" alt="image23" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/24.jpg" data-large="imgs/spoons/24.jpg" alt="image24" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/25.jpg" data-large="imgs/spoons/25.jpg" alt="image25" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/26.jpg" data-large="imgs/spoons/26.jpg" alt="image26" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/27.jpg" data-large="imgs/spoons/27.jpg" alt="image27" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/28.jpg" data-large="imgs/spoons/28.jpg" alt="image28" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/29.jpg" data-large="imgs/spoons/29.jpg" alt="image29" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/30.jpg" data-large="imgs/spoons/30.jpg" alt="image30" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/31.jpg" data-large="imgs/spoons/31.jpg" alt="image31" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/32.jpg" data-large="imgs/spoons/32.jpg" alt="image32" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/33.jpg" data-large="imgs/spoons/33.jpg" alt="image33" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/34.jpg" data-large="imgs/spoons/34.jpg" alt="image34" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/35.jpg" data-large="imgs/spoons/35.jpg" alt="image35" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/36.jpg" data-large="imgs/spoons/36.jpg" alt="image36" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/37.jpg" data-large="imgs/spoons/37.jpg" alt="image37" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/38.jpg" data-large="imgs/spoons/38.jpg" alt="image38" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/39.jpg" data-large="imgs/spoons/39.jpg" alt="image39" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/40.jpg" data-large="imgs/spoons/40.jpg" alt="image40" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/41.jpg" data-large="imgs/spoons/41.jpg" alt="image41" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/42.jpg" data-large="imgs/spoons/42.jpg" alt="image42" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/43.jpg" data-large="imgs/spoons/43.jpg" alt="image43" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/44.jpg" data-large="imgs/spoons/44.jpg" alt="image44" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/45.jpg" data-large="imgs/spoons/45.jpg" alt="image45" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/46.jpg" data-large="imgs/spoons/46.jpg" alt="image46" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/47.jpg" data-large="imgs/spoons/47.jpg" alt="image47" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/48.jpg" data-large="imgs/spoons/48.jpg" alt="image48" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/49.jpg" data-large="imgs/spoons/49.jpg" alt="image49" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/50.jpg" data-large="imgs/spoons/50.jpg" alt="image50" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/51.jpg" data-large="imgs/spoons/51.jpg" alt="image51" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/52.jpg" data-large="imgs/spoons/52.jpg" alt="image52" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/53.jpg" data-large="imgs/spoons/53.jpg" alt="image53" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/54.jpg" data-large="imgs/spoons/54.jpg" alt="image54" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/55.jpg" data-large="imgs/spoons/55.jpg" alt="image55" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/56.jpg" data-large="imgs/spoons/56.jpg" alt="image56" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/57.jpg" data-large="imgs/spoons/57.jpg" alt="image57" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/58.jpg" data-large="imgs/spoons/58.jpg" alt="image58" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/59.jpg" data-large="imgs/spoons/59.jpg" alt="image59" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/60.jpg" data-large="imgs/spoons/60.jpg" alt="image50" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/61.jpg" data-large="imgs/spoons/61.jpg" alt="image51" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/62.jpg" data-large="imgs/spoons/62.jpg" alt="image52" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/63.jpg" data-large="imgs/spoons/63.jpg" alt="image53" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/64.jpg" data-large="imgs/spoons/64.jpg" alt="image54" data-description="" /></a></li>
                                    <li><a href="#"><img src="imgs/spoons/tn/65.jpg" data-large="imgs/spoons/65.jpg" alt="image55" data-description="" /></a></li>
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