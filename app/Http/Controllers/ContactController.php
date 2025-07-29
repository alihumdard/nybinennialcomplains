<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $toEmail = 'info@boicomplianceservices.com';
        $subject = 'New Contact Form Submission from ' . $validated['name'];
        $body = "You have received a new message from your website contact form.\n\n" .
                "Here are the details:\n\n" .
                "Name: {$validated['name']}\n" .
                "Email: {$validated['email']}\n" .
                "Message:\n{$validated['message']}";

        Mail::raw($body, function ($message) use ($toEmail, $subject, $validated) {
            $message->to($toEmail)
                    ->subject($subject)
                    ->from('development@oraclesforce.com', $validated['name']) // ✅ Use your domain's email
                    ->replyTo($validated['email'], $validated['name']);       // ✅ User's email here
        });

        return redirect()->route('form')->with('success', 'Thank you for your message! We will get back to you shortly.');
    }
}
