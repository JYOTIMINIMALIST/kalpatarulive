<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Smtpmail {
        public function sendMail($content, $email, $name, $subject, $attachment){
                require 'PHPMailer/PHPMailerAutoload.php';
        //PHPMailer Object
                $mail = new PHPMailer;
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                $mail->SMTPDebug = 3;
                $mail->SMTPDebug = false;
                $mail->isSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->Username = "dilipkumawat321@gmail.com";
                $mail->Password = "ucantcme.o";
                $mail->SMTPSecure = "ssl";

        //Set TCP port to connect to 
                $mail->Port = 465;

                $mail->From = "diliplumawat321@gmail.com";
                $mail->FromName = "Tadrib";

        //To address and name
                $mail->addAddress($email,$name);
        //CC and BCC
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $content;

                if(!$mail->send()) 
                {
                // echo "Mailer Error: " . $mail->ErrorInfo;
                } 
                else 
                {
                //echo 'email sent';
                }
        }

}