<?php

namespace App\Http\Controllers;

use App\Jobs\SendBulkEmailJob;
use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionActionsController extends Controller
{
    /**
     * Dispatch a job to send an email for a single submission.
     */
    public function sendSingleMail(Submission $submission)
    {
        SendBulkEmailJob::dispatch($submission);
        return redirect()->back()->with('success', 'Email is being sent to ' . $submission->business_name);
    }

    /**
     * Dispatch jobs to send emails for multiple submissions.
     */
    public function sendBulkMail(Request $request)
    {
        $request->validate([
            'submission_ids' => 'required|array|min:1',
            'submission_ids.*' => 'exists:submissions,id',
        ]);

        $submissions = Submission::find($request->submission_ids);

        foreach ($submissions as $submission) {
            SendBulkEmailJob::dispatch($submission);
        }

        return redirect()->back()->with('success', 'Emails are being sent to the selected records.');
    }
}