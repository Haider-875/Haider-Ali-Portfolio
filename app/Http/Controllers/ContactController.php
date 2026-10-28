<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage as ContactMail;
use App\Models\ContactMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Show the contact page.
     */
    public function index(): View
    {
        $owner = config('portfolio.owner', []);

        return view('contact', [
            'owner' => $owner,
        ]);
    }

    /**
     * Handle the contact form submission.
     */
    public function send(ContactRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // 1. Persist to MySQL database
        $message = ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'] ?? null,
            'project_type' => $validated['project_type'] ?? null,
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'is_read' => false,
        ]);

        // 2. Dispatch email notification to Hadihnd0@gmail.com
        $recipientEmail = env('CONTACT_RECEIVER_EMAIL', config('portfolio.owner.email', 'Hadihnd0@gmail.com'));

        try {
            Mail::to($recipientEmail)->send(new ContactMail($message));
        } catch (\Throwable $e) {
            // Log mail exception without blocking successful user submission
            Log::warning('Contact email dispatch deferred or failed: '.$e->getMessage());
        }

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you, '.$validated['name'].'! Your message has been received. Haider will review it and get back to you shortly.');
    }
}
