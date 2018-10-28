<?php

namespace App\Classes;


use PHPMailer\PHPMailer\PHPMailer;

class Mail
{
    protected $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer;
        $this->setUp();
    }

    public function setUp(): void
    {
        $this->mail->isSMTP();
        $this->mail->Mailer = 'smtp';
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = 'tls';

        $this->mail->Host = getenv('SMTP_HOST');
        $this->mail->Port = getenv('SMTP_PORT');

        $environment = getenv('APP_ENV');
        if($environment === 'local') $this->mail->SMTPDebug = 2;

        // auth info
        $this->mail->Username = getenv('EMAIL_USERNAME');
        $this->mail->Password = getenv('EMAIL_PASSWORD');

        $this->mail->isHTML(true);
        $this->mail->SingleTo = true;

        // sender info
        $this->mail->From = getenv('ADMIN_EMAIL');
        $this->mail->From = 'ACME STORE';
    }

    public function send(array $data)
    {
        $this->mail->addAddress($data['to'], $data['name']);
        $this->mail->Subject = $data['subject'];
        $this->mail->Body = $data['body'];
    }
}