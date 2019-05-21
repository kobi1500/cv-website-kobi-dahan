<?php

require_once ('PHPMailerAutoload.php');
require_once ('SMTP.php');

class mailConnection {

    private $mail;

    public function __construct() {
        $this->mail = new PHPMailer();



//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);

        $this->mail->IsSMTP(); // telling the class to use SMTP
        $this->mail->isHTML(TRUE);
        $this->mail->Host = "kobi6255@gmail.com"; // SMTP server
        $this->mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
        // 1 = errors and messages
        // 2 = messages only
        $this->mail->SMTPAuth = true;                  // enable SMTP authentication
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Host = "smtp.gmail.com"; // sets the SMTP server
        $this->mail->Port = 587;                    // set the SMTP port for the GMAIL server
        $this->mail->Username = "YOUR_USER_NAME"; // SMTP account username
        $this->mail->Password = "YOUR_PASSWORD";        // SMTP account password

        $this->mail->SetFrom('kobi6255@gmail.com', 'קובי דהן');

        $this->mail->CharSet = 'UTF-8';

        $this->mail->SMTPKeepAlive = true;
        $this->mail->AltBody = ""; // optional, comment out and test
    }

    public function sendMessage($name, $email, $subject, $message) {

        $this->mail->Subject = $subject;
        $this->mail->addEmbeddedImage("../images/logoM.jpg", "logo");
        $this->mail->Body = "<img src=\"cid:logo\" />";
        $this->mail->Body .= '<html><body>';
        $this->mail->Body .= '<table rules="all" style="border-color:#666; cellpadding:10; margin-left:500px;">';
        $this->mail->Body .= "<tr style='background: #eee;'><td>" . $name . "</td><td><strong>שם השולח:</strong> </td></tr>";
        $this->mail->Body .= "<tr style='background: #eee;'><td>" . $email . "</td><td><strong>מייל:</strong> </td></tr>";
        $this->mail->Body .= "<tr style='background: #eee;'><td>" . $subject . "</td><td><strong>נושא המייל:</strong> </td></tr>";
        $this->mail->Body .= "<tr style='background: #eee;'><td>" . $message . "</td><td><strong>תוכן המייל:</strong> </td></tr>";
        $this->mail->Body .= "</table>";
        $this->mail->Body .= "</body></html>";

        $this->mail->AddAddress("kobi6255@gmail.com");
        if (!$this->mail->Send()) {
            echo "Mailer Error: " . die($this->mail->ErrorInfo);
        }
        $this->mail->ClearAddresses();
    }

}
