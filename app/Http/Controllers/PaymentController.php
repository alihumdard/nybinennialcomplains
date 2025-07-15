<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Exception;

class PaymentController extends Controller
{
    public function processPayment(Request $request, Submission $submission)
    {
        $request->validate([
            'stripeToken' => 'required'
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = Charge::create([
                "amount" => 125 * 100, // Amount in cents
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Biennial Statement Filing for " . $submission->business_name,
            ]);

            if ($charge->status == 'succeeded') {
                $submission->update(['is_paid' => true]);
                return redirect()->route('confirmation')->with('success', 'Payment successful!');
            }

            return back()->with('error', 'Payment failed. Please try again.');

        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}