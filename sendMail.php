<?php
require_once 'classes/PHPMailer.class.php';

if(isset($_POST)){
    $formOk = true;
    $errors = array();

    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('Y/m/d');
    $time = date('H:i:s');

    array_walk_recursive($_POST, create_function('&$val', '$val = stripslashes(trim($val));'));
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $businessName = $_POST['businessName'];
    $priceListRequest = $_POST['priceListRequest'];

    if(empty($name)){
        $formOk = false;
        $errors[] = 'You have not entered a name';
    }elseif(empty($emailAddress)){
        $formOk = false;
        $errors[] = 'You have not entered an email address';
    }elseif(!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)){
        $formOk = false;
        $errors[] = 'You have not entered a valid email address';
    }elseif(strlen($message < 10)){
        $formOk = false;
        $errors[] = 'Your message must be greater than 10 characters';
    }


    if($formOk){
        try {
            $mail = new PHPMailer(true);
            $mail->AddAddress('physicsmazz@gmail.com', 'MAZZ');
            $mail->Subject = "Email from mazzwebdesign.com";
            $mail->From = 'donotreply@mazzwebdesign.com';
            $mail->FromName = "Mazzantini Webdesign";

            $emailBody = "From: {$name}<br>";
            $emailBody .= "Email: {$email}<br>";
            $emailBody .= "Phone: {$phone}<br>";
            $emailBody .= "Business Name: {$businessName}<br>";
            $emailBody .= "Message: {$message}<br>";
            $emailBody .= "Price List Request: {$priceListRequest}<br>";

            $mail->MsgHTML($emailBody);
            $mail->Send();
            header("location: thankyou.php");
        } catch (Exception $e) {
            echo ($e->getMessage());
        }
    }
}








 