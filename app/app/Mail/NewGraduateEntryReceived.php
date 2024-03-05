<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf;

class NewGraduateEntryReceived extends Mailable
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
            subject: config('entry-form.new-graduate.subject'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            text: 'email.new-graduate-entry.received',
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
            $this->getResumePdfAttachment(),
            $this->getPersonalStatementPdfAttachment(),
        ];
    }

    private function getResumePdfAttachment()
    {
        $data = [
            'data' => $this->data,
        ];

        $title = config('entry-form.new-graduate.pdf.resume');
        $config = [
            'title' => $title,
        ];

        return Attachment::fromData(
            fn () => LaravelMpdf::loadView('pdf/new-graduate-entry/resume', $data, [], $config)->Output('', 'S'),
            $title
        )->withMime('application/pdf');
    }

    private function getPersonalStatementPdfAttachment()
    {
        $data = [
            'data' => $this->data['personal_statement'],
        ];

        $title = config('entry-form.new-graduate.pdf.personal-statement');
        $config = [
            'title' => $title,
        ];

        return Attachment::fromData(
            fn () => LaravelMpdf::loadView('pdf/new-graduate-entry/personal-statement', $data, [], $config)->Output('', 'S'),
            $title
        )->withMime('application/pdf');
    }
}
