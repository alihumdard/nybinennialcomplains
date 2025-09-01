<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function viewPdf(Submission $submission)
    {
        $url    = null;
        $qrCode = null;

        if (! $submission->is_paid) {
            $url    = route('checkout.with_data', ['submission' => $submission->dos_id]);
            $qrCode = base64_encode(QrCode::format('svg')->size(120)->generate($url));
        }

        $html = view('pdf.submission-template', compact('submission', 'qrCode', 'url'))->render();

        // Generate the PDF binary
        $pdf = Browsershot::html($html)
            ->format('A4')
            ->margins(20, 20, 20, 20)
            ->showBackground()
            ->emulateMedia('screen')
            ->pdf();   // 👈 instead of inlinePdf(), generate PDF content

        // Return inline response (opens in browser tab)
        return response($pdf)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="biennial-statement-' . $submission->dos_id . '.pdf"');
    }


    public function downloadBulkPDF(Request $request)
    {
        $request->validate([
            'submission_ids'   => 'required|array|min:1',
            'submission_ids.*' => 'exists:submissions,id',
        ]);

        $submissions = Submission::whereIn('id', $request->submission_ids)->get();

        $html = '';
        foreach ($submissions as $index => $submission) {
            $url    = null;
            $qrCode = null;

            if (!$submission->is_paid) {
                $url    = route('checkout.with_data', ['submission' => $submission->dos_id]);
                $qrCode = base64_encode(QrCode::format('svg')->size(120)->generate($url));
            }

            // render submission template
            $html .= view('pdf.submission-template', compact('submission', 'qrCode', 'url'))->render();

            // just 1 page break (so next submission starts on new page)
            if ($index !== $submissions->count() - 1) {
                $html .= '<div style="page-break-after: always;"></div>';
            }
        }

        $path = storage_path('app/public/bulk-biennial-statements-' . time() . '.pdf');

        Browsershot::html($html)
            ->format('A4')
            ->margins(20, 20, 20, 20)
            ->showBackground()
            ->emulateMedia('screen')
            ->save($path);

        return response()->download($path)->deleteFileAfterSend(true);
    }

    public function printBulkPDF(Request $request)
    {
        $request->validate([
            'submission_ids'   => 'required|array|min:1',
            'submission_ids.*' => 'exists:submissions,id',
        ]);

        $submissions = Submission::whereIn('id', $request->submission_ids)->get();

        $html = '';
        foreach ($submissions as $index => $submission) {
            $url    = null;
            $qrCode = null;

            if (!$submission->is_paid) {
                $url    = route('checkout.with_data', ['submission' => $submission->dos_id]);
                $qrCode = base64_encode(QrCode::format('svg')->size(120)->generate($url));
            }

            // render submission template
            $html .= view('pdf.submission-template', compact('submission', 'qrCode', 'url'))->render();

            // ensure next submission starts from new page
            if ($index !== $submissions->count() - 1) {
                $html .= '<div style="page-break-after: always;"></div>';
            }
        }

        $fileName = 'bulk-biennial-statements-' . time() . '.pdf';
        $path = storage_path('app/public/' . $fileName);

        Browsershot::html($html)
            ->format('A4')
            ->margins(20, 20, 20, 20)
            ->showBackground()
            ->emulateMedia('screen')
            ->save($path);

        // Open PDF directly in browser instead of download
        return response()->file($path, [
            'Content-Type'        => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $fileName . '"',
        ]);
    }
}
