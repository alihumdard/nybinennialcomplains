<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function show(Submission $submission)
    {
        return view('pages.admin.submissions.show', compact('submission'));
    }
    
    public function update(Request $request, Submission $submission)
    {
        // We get the data from the form and update the record
        $submission->update($request->all());

        // Then redirect to the confirmation page
        return redirect()->route('confirmation');
    }
}