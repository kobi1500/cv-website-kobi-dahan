<?php
include_once ("../db/connect_db.php");
include_once("../PHPMailer-master/mail.php");
$db=new connect_db();
$mail = new mailConnection();

if (isset($_POST['name']) && isset($_POST['email'])&&(isset($_POST['subject']) && isset($_POST['message']))) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    echo "ok";
    $db->AddMail($name,$email,$subject,$message);
   $mail->sendMessage($name, $email, $subject, $message);
}
else{
echo "wrong";
}
