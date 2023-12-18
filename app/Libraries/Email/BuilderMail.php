<?php

declare(strict_types=1);

namespace App\Libraries\Email;

use App\Libraries\Email\Mail;

class BuilderMail
{

    private $build;
    public function __construct(MailInterface $mail, protected string $from, protected string $subject, protected string $message)
    {
        $this->build = $mail;
    }

    public function builder()
    {
        $this->build->mailFor($this->from)
                    ->mailSubject($this->subject)
                    ->mailMessage($this->message)
                    ->mailSend();
    }
}
