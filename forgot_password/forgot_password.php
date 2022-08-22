<?php
require_once dirname(__FILE__) . "/../_system/system.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if ($_POST) {
    if (isset($_POST['reset_password'])) {
        if (query("SELECT * FROM user WHERE username=? AND email=?", [$_POST['username'], $_POST['email']])->rowCount() > 0) {
            $user = query("SELECT * FROM user WHERE username=? AND email=?", [$_POST['username'], $_POST['email']])->fetch();
            $code = hash("sha256", password_hash("02458" . rand(1, 99999), PASSWORD_DEFAULT));
            query("INSERT INTO forgot_password (username, email, code, check_reset) VALUES (?,?,?,?)", [$user['username'], $user['email'], $code, 0]);
            $_SESSION['reset_password'] = $user['email'];
            /*$to = $user['email'];
            $subject = "Password reset - Hakkaverse account";
            $txt = "To reset and change your password, click the following link and follow the instructions: https://hakkaverse.com/reset_password/?reset=$code";
            $headers = "From: support@hakkaverse.com" . "\r\n" .
                "CC: support@hakkaverse.com";

            // send email
            mail($to, $subject, $txt, $headers);*/
            $name = $user['username'];
            $email = $user['email'];
            $header = "Password reset - Hakkaverse account";
            $detail = "To reset and change your password, click the following link and follow the instructions: https://hakkaverse.com/reset_password/?reset=$code";

            require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';
            
            
            $mail = new PHPMailer(true);
            
            try {
             
                              
                $mail->isSMTP();                                           
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'hakkaverse.web@gmail.com';                    
                $mail->Password   = 'ykivdjvblqcrakei';                             
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                $mail->Port       = 465;                                    
            
              
                $mail->setFrom('hakkaverse.web@gmail.com', 'HakkaVerse');
            
                $mail->addAddress($email);             
            
            
                $mail->isHTML(true);                                 
                $mail->Subject = $header;
                $mail->Body    = $detail;
                $mail->AltBody = 'reset password';
            
                $mail->send();
                echo 'Message has been sent';
                header("Location: ../Login");
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            $_SESSION['reset_password_error'] = true;
            header("Location: ../Login");
        }
    }
}
