<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable //implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $user_contact;

    public function __construct($userData)
    {
        $this->user_contact = $userData;

        
    }
    

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noreply@moviemania.it', 'No Reply'),
            subject: 'Grazie per averci contattato',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.contact-mail',
            with: [
                'user' => $this->user_contact,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
