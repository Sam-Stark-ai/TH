<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index(){
        $contact_details = Contact::first();
        return view("frontend.contact", compact('contact_details'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'company_name' => 'nullable|string|max:255',
                'full_name' => 'required|string|max:255',
                'phone' => 'nullable|string|max:20',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            $contactSubmission = ContactSubmission::create([
                'company_name' => $request->company_name,
                'full_name' => $request->full_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            Log::info('Contact form submitted successfully:', ['id' => $contactSubmission->id]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! We will get back to you soon.'
            ]);

        } catch (\Exception $e) {
            Log::error('Contact form submission error:', ['message' => $e->getMessage()]);

            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again.'
            ], 500);
        }
    }
}
