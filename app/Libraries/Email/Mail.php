<?php

declare(strict_types=1);

namespace App\Libraries\Email;
use App\Libraries\Email\MailInterface;

class Mail implements MailInterface
{
    protected $mail;

    public function __construct()
    {
        $this->mail = service("email");
    }
    public static function mail()
    {
        return new Mail;
    }

    public function mailFor(string $email) :self
    {
        $this->mail->setTo($email);

        return $this;
    }

    public function mailSubject(string $title) :self
    {
        $this->mail->setSubject($title);

        return $this;
    }

    public function mailMessage(string $msg) :self
    {
        $this->mail->setMessage($msg);

        return $this;
    }

    public function mailSend()
    {
        $this->mail->send();

        return $this;
    }

}
