<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMessage;
use App\Mail\MessageRecieved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sendMail() {
        Mail::send(new MessageRecieved());
    }

    /*
    * Sends e-mail message from contact form to recipient
    */
    public function sendMessage(Request $request) {

        // Recieves: full-name, sender, subject, recipient and message        
        $customSender = $request->input('sender');
        $customSubject = $request->input('subject');
        
        Mail::to($customSender)                
                ->send(new ContactFormMessage($customSubject, $customSender));
    }
}
