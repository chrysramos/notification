<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{

    private $mail = \stdClass::class;

    public function __construct($smtpDebug, $host, $user, $pass, $smtpSecure, $port, $setFromEmail, $setFromName)
    {
        $this->mail = new PHPMailer(true);

        //Server settings
        $this->mail->SMTPDebug = $smtpDebug;      // Enable verbose debug output
        $this->mail->isSMTP();                    // Set mailer to use SMTP
        $this->mail->Host = $host;                // Specify main and backup SMTP servers ('caxote.com.br')
        $this->mail->SMTPAuth = true;             // Enable SMTP authentication
        $this->mail->Username = $user;            // SMTP username ('sender@caxote.com.br')
        $this->mail->Password = $pass;            // SMTP password ('teste@123')
        $this->mail->SMTPSecure = $smtpSecure;    // Enable TLS encryption, `ssl` also accepted ('tls')
        $this->mail->Port = $port;                // TCP port to connect to (587)
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);

        //Recipients
        $this->mail->setFrom($setFromEmail, $setFromName); //('chrystian@caxote.com.br', 'Equipe Caxote')
    }

    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
    {
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar o e-mail : {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }
}