<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'info@freasherit.com';
        $subject = "Freashers IT Contact Us Mail";
        $name    = 'Freasher IT';
        
        return $this->view('mail.mail_view')
            ->from($address, $name)
            // ->cc($address, $name)
            // ->bcc($address, $name)
            // ->replyTo($address, $name)
            ->subject($subject)
            ->with([ 'bodyMessage' => $this->data ]);
    }
}
