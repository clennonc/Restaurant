<?php
require 'vendor/autoload.php';

class SendEmail{

    public static function SendMail($to,$subject,$content){
        $key = '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';

        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("clennon.cherry@gmail.com", "Cherrion Clennon");
        $email->setSubject($subject);
        $email->addTo($to);
        $email->addContent("text/plain", $content);
        
        $sendgrid = new \SendGrid($key);

        try{
            $response = $sendgrid->send($email);
            return $response; 
        }catch(Exception $e){
            echo 'Email exception Caught: '. $e->getMessage() ."\n";
            return false;
        }
    
    }

}

?>