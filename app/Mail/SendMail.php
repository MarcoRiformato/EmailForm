<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Nuova Richiesta di Contatto',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.sendEmail',
            with: [
                'name' => $this->details['name'] ?? '',
                'surname' => $this->details['surname'] ?? '',
                'email' => $this->details['email'] ?? '',
                'birthPlace' => $this->details['birthPlace'] ?? '',
                'birthday' => $this->details['birthday'] ?? '',
                'phone' => $this->details['phone'] ?? '',
                'company' => $this->details['company'] ?? '',
                'message' => $this->details['message'] ?? '',
                'privacyPolicy' => $this->details['privacyPolicy'] ?? false
            ]
        );
    }

    public function attachments()
    {
        return [];
    }
}

