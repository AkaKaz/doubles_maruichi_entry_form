<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf;

class EntryReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: config('entry-form.subject'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            text: 'email.entry.received',
            with: [
                'data' => $this->data,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromData(
                fn () => LaravelMpdf::loadView('pdf/entry/resume', [
                    'data' => $this->data,
                ])->Output('', 'S'),
                config('entry-form.resume_pdf')
            )->withMime('application/pdf'),

            Attachment::fromData(
                fn () => LaravelMpdf::loadView('pdf/entry/personal-statement', [
                    'data' => $this->data['personal_statement'],
                ])->Output('', 'S'),
                config('entry-form.personal_statement_pdf')
            )->withMime('application/pdf'),
        ];
    }
}
