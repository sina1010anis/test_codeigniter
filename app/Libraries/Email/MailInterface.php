<?php

declare(strict_types=1);

namespace App\Libraries\Email;

interface MailInterface
{
    public function mailFor(string $email) :self;

    public function mailSubject(string $title) :self;

    public function mailMessage(string $msg) :self;

    public function mailSend();
}
