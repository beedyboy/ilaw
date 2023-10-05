<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class PageController extends Controller
{
    public function index()
    {

        return view('pages.index');
    }
    public function services()
    {

        return view('pages.services');
    }
    public function about()
    {

        return view('pages.about');
    }
    public function contact()
    {

        return view('pages.contact');
    }
    public function sendContactEmail(Request $request)
    {
        // Validation logic here
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'description' => 'required',
        ]);

        // Pass the form data to the email view
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'description' => $request->input('description'),
        ];


        Mail::to('boladebode@email.com')->send(new ContactFormMail($data));

        return view('pages.contact')->with('success', 'Your message has been sent successfully.');
    }
}
