<?php

namespace App\Services;

use App\Mail\EmailFromForm;
use Illuminate\Contracts\Mail\Mailer;


/**
 * Class EmailService
 */
class EmailService
{
    private Mailer $mailer;

    /**
     * EmailService constructor.
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param string $message
     */
    public function send(string $message)
    {
        $this->mailer
            ->to(config('mail.from_form.destination'))
            ->send(new EmailFromForm($message))
        ;
    }
}
