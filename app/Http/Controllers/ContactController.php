<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Capture the details from the request
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Log the email details for debugging purposes
        Log::info('Sending email with details: ' . json_encode($details));

        // Send the email
        try {
            Mail::send('emails.contact', ['details' => $details], function ($message) use ($details) {
                $message->to('n1kol1vay@gmail.com')
                    ->subject('Contact Form Submission from ' . $details['name'])
                    ->from($details['email'], $details['name']);

                // Ensure no reply headers are set
                $headers = $message->getHeaders();
                $headers->remove('In-Reply-To');
                $headers->remove('References');
            });

            // Log successful sending
            Log::info('Email sent successfully.');

            // Redirect back with success message
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error sending email: ' . $e->getMessage());

            // Redirect back with error message
            return redirect()->back()->with('error', 'There was an error sending your message. Please try again later.');
        }
    }
}
