<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
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

        Mail::to(config('mail.from.address'))->send(new SendMail($validatedData));

        return Inertia::render('FormSection', [
            'message' => 'Email sent successfully'
        ]);
    }
}