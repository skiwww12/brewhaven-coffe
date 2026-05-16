<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class PromoMail extends Mailable
{
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to Brew Haven — Promo Special Untuk Kamu'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.promo'
        );
    }
}