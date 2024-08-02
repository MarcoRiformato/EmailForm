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
        $details = [
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'email' => $request->get('email'),
            'birthPlace' => $request->get('birthPlace'),
            'birthday' => $request->get('birthday'),
            'phone' => $request->get('phone'),
            'company' => $request->get('company'),
            'message' => $request->get('message'),
            'privacyPolicy' => $request->get('privacyPolicy')
        ];

        Mail::to('marco.riformato@gmail.com')->send(new SendMail($details));

        return Inertia::render('YourComponent', [
            'message' => 'Email inviata'
        ]);
    }
}
