<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class EmailFromForm
 * @package App\Mail
 */
class EmailFromForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var string
     */
    private string $message;

    /**
     * Create a new message instance.
     *
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.from_form.template', [
            'content' => $this->message,
        ]);
    }
}
