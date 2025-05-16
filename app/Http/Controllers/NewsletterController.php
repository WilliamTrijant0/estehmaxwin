<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewsletterController extends Controller
{
    /**
     * Handle newsletter subscription.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Here you would typically:
        // 1. Check if the email already exists in your subscribers
        // 2. Add the email to your newsletter service (like Mailchimp)
        // 3. Store the subscriber in your database
        
        // For demo purposes, we'll just log the subscription
        Log::info('New newsletter subscription: ' . $request->email);

        return back()->with('success', 'Thanks for subscribing to our newsletter!');
    }
}
