<?php
namespace App\Http\Controllers;

use App\Models\Submission;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Spatie\Browsershot\Browsershot;

class PDFController extends Controller
{
    public function download(Submission $submission)
    {
        $url    = null;
        $qrCode = null;

        if (! $submission->is_paid) {
            $url    = route('checkout.with_data', ['submission' => $submission->dos_id]);
            $qrCode = base64_encode(QrCode::format('svg')->size(120)->generate($url));
        }

        $html = view('pdf.submission-template', compact('submission', 'qrCode', 'url'))->render();

        $path = storage_path('app/public/biennial-statement-' . $submission->dos_id . '.pdf');

        Browsershot::html($html)
            ->format('A4')
            ->margins(20, 20, 20, 20)
            ->showBackground()       // 👈 yeh add karo
            ->emulateMedia('screen') // optional, colors/layout ke liye helpful
            ->save($path);

        return response()->download($path)->deleteFileAfterSend(true);
    }
}
