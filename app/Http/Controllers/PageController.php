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
            'text' => 'required',
        ]);
    
        Mail::to('your@email.com')->send(new ContactFormMail($request->all()));
    
        return view('pages.contact')->with('success', 'Your message has been sent successfully.');
    }
}
