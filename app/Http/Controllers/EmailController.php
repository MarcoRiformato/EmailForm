<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Inertia\Inertia;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email',
            'birthPlace' => 'nullable|string|max:255',
            'birthday' => 'nullable|date',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
            'privacyPolicy' => 'required|accepted'
        ]);

        try {
            Mail::to(config('mail.from.address'))->send(new SendMail($validated));
            return back()->with('success', 'Email sent successfully');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to send email: ' . $e->getMessage()]);
        }
    }
}