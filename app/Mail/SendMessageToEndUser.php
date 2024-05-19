<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMessageToEndUser extends Mailable
{
    use Queueable, SerializesModels;

    public $senderMessage = '';
    public $name = '';
    public $url = '';
    public $mailData;
    /**
     * Create a new message instance.
     */
    public function __construct($name, $senderMessage, $mailData)
    {
        $this->name = $name;
        $this->senderMessage = $senderMessage;
        $this->mailData = $mailData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noovv9@gmail.com', get_setting_value('_site_name')),
            subject: 'Your message has been sent!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.send_message_to_end_user',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
