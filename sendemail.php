<?php 
    require 'vendor/autoload.php';

    class SendEmail{

        public static function SendMail($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("forrestshellyann@gmail.com", "Rushelle Forrest");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
            //$email->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>