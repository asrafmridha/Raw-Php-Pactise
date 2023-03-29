<?php

class Mailer{
    function sendMail($to,$from,$subject,$message, $attachment){
    }

    function connectMTA($mtaType, $userName, $password){

    }

    function prepareMail($to,$from,$subject,$message){
    }
    function disPatch(){}
}

class BetterMailer
{
    function __construct(MailGatewayInterface $mg, MailInterface $mail, AttachmentInterface $attachment)
    {
        $this->mg        = $mg;
        $this->mail      =  $mail;
        $this->attachment = $attachment;
    }

    function sendMail($to, $from, $subject, $message, $attachment){
        $this->mail->addAttachment($attachment);
        $mailBody= $this->mail->prepare($to, $from, $subject, $message);
        $this->mg->connect();
        $this->mg->send($mailBody);

    }
}
