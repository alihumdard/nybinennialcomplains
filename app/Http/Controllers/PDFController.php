<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PDFController extends Controller
{
  public function download(Submission $submission)
  {
    $url = null;
    $qrCode = null;

    // Only generate a URL and QR code if the submission is NOT paid
    if (!$submission->is_paid) {
      $url = route('checkout.with_data', ['submission' => $submission->dos_id]);
      $qrCode = base64_encode(QrCode::format('svg')->size(120)->generate($url));
    }

    $pdf = Pdf::loadView('pdf.submission-template', compact('submission', 'qrCode', 'url'));

    return $pdf->download('biennial-statement-'.$submission->dos_id.'.pdf');
  }
}