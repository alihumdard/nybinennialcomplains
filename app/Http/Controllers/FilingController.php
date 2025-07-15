<?php

namespace App\Http\Controllers;

use App\Jobs\SendPaymentConfirmationJob;
use App\Models\Submission;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Exception;

class FilingController extends Controller
{
    public function processFiling(Request $request, Submission $submission)
    {
        $validatedData = $request->validate([
            'business_name' => 'required|string|max:255',
            'dos_id' => 'required|string',
            'entity_type' => 'required|string',
            'ceo_name' => 'required|string|max:255',
            'dos_process_address_1' => 'required|string|max:255',
            'dos_process_city' => 'required|string|max:255',
            'dos_process_zip' => 'required|string|max:255',
            'stripeToken' => 'required|string',
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = Charge::create([
                "amount" => 125 * 100, // $125.00 in cents
                "currency" => "usd",
                "source" => $validatedData['stripeToken'],
                "description" => "Filing for " . $validatedData['business_name'],
            ]);

            if ($charge->status == 'succeeded') {
                // Payment was successful, now update the database
                $submission->update(array_merge($validatedData, ['is_paid' => true]));

                // Send the "Thank You" email in the background
                SendPaymentConfirmationJob::dispatch($submission);

                // Redirect to confirmation page with a success pop-up
                return redirect()->route('confirmation')->with('success', 'Your filing has been successful!');
            }

            return back()->with('error', 'Payment was not successful. Please try again.');

        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}