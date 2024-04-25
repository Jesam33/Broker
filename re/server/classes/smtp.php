<?php
require_once('../../mailer/PHPMailer.php');
require_once('../../mailer/Exception.php');
require_once('../../mailer/OAuth.php');
require_once('../../mailer/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;

class message{
    function __construct($host,$user,$pass,$po,$fr,$reto){
        $this->h = $host;
        $this->u = $user;
        $this->p = $pass;
        $this->po = $po;
        $this->f = $fr;
        $this->r = $reto;
    }
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        // $mail->SMTPDebug = 2;
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = $this->h; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = $this->u; // Change Email Address
        $mail->Password = $this->p; // Change Email Password
        $mail->Port = $this->po; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($this->f[0],$this->f[1]);
        $mail->addAddress($email);
        $mail->AddReplyTo($this->r[0],$this->r[1]);
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();

    }

}
