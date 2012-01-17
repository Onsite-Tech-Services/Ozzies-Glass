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
    <!--    <link rel="apple-touch-icon" href="apple-touch-icon.png">-->
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
    <script src="js/libs/modernizr-2.0.6.min.js"></script>

</head>
<body>
<div id="noJs">
    You must have JavaScript installed.
</div>
<div id="container" class="contact">

    <?php
    $page = 'contact';
    require_once 'includes/header.inc.php';
    ?>

    <div id="main" role="main">
        <h2>Please fill out the form below</h2>

        <form id="contactForm" action="sendMail.php">
            <div id="formTop">
                <div id="topLeft">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <label for="phone">Phone #</label>
                    <input type="text" name="phone" id="phone">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email">
                    <label for="businessName">Business Name</label>
                    <input type="text" name="businessName" id="businessName">
                </div>
                <div id="topMiddle">
                    <label for="message">Questions/Comments</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div id="topRight">
                    <h3>Thank you for contacting Ozzie's Glass.com</h3>

                    <p>
                        Please contact us if you have any questions or comments.
                        If you have requested a pricing list, please fill out the form accordingly to assure
                        the process of getting that information to you.
                        We will contact you once we have received your request.
                        We verify all businesses before a wholesale list is processed.
                        Thank you for visiting, and contacting Ozzie's Glass.com. We look to talking with you.
                    </p>
                </div>
            </div>
            <div id="formBottom">
                <input type="checkbox" name="priceListRequest" id="priceListRequest">
                <label for="priceListRequest">I would like to request a price list</label>
                <button type="submit" id="sendMailBtn">Send</button>
            </div>
        </form>
    </div>
    <?php

    require_once 'includes/footer.inc.php';

    $admin = false;
    $ui = false;
    require_once('includes/scripts.inc.php');
    ?>
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