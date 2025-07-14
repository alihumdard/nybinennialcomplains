<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing(Request $request)
    {
        $submission = null;
        if ($request->has('dos_id')) {
            $submission = Submission::where('dos_id', $request->input('dos_id'))->first();
        }
        
        return view('pages.landingpage', compact('submission'));
    }

    public function checkout()
    {
        return view('pages.checkoutpage');
    }

    public function confirmation()
    {
        return view('pages.confirmation');
    }

    public function showCheckoutWithData(Submission $submission)
    {
        return view('pages.checkoutpage', compact('submission'));
    }
}