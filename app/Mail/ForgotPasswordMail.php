<?php

namespace App\Mail;

use App\Models\Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    private $auth;
    /**
     * Create a new message instance.
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->subject("Welcome to Courageon App")
                ->markdown('mail.forgot-pass', [
            'name' => $this->auth->username,
        ]);
    }
}
