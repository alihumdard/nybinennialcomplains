<?php

namespace App\Mail;

use App\Models\Submission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf; // 1. Import the PDF Facade
use SimpleSoftwareIO\QrCode\Facades\QrCode; // 1. Import the QrCode Facade

class SubmissionNoticeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;

    public function __construct(Submission $submission)
    {
        $this->submission = $submission;
    }

    public function build()
    {
        // 2. Generate URL and QR Code (same logic as PDFController)
        $url = null;
        $qrCode = null;

        if (!$this->submission->is_paid) {
            $url = route('checkout.with_data', ['submission' => $this->submission->dos_id]);
            $qrCode = base64_encode(QrCode::format('svg')->size(120)->generate($url));
        }

        // 3. Generate the PDF content
        $pdf = Pdf::loadView('pdf.submission-template', [
            'submission' => $this->submission,
            'qrCode' => $qrCode,
            'url' => $url,
        ]);

        // 4. Build the email and attach the PDF
        return $this->markdown('emails.submissions.notice')
                    ->subject('Your Submission Information: ' . $this->submission->business_name)
                    ->attachData($pdf->output(), 'biennial-statement-'.$this->submission->dos_id.'.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}