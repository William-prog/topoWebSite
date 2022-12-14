<?php

namespace App\Http\Controllers;

use App\Landing;
use App\Mail\ContactFormMessage;
use Illuminate\Http\Request;
use App\Mail\MessageRecieved;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return 'hello';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function show(Landing $landing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function edit(Landing $landing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Landing $landing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landing $landing)
    {
        //
    }

    /*
    * Sends e-mail message from contact form to recipient
    */
    public function sendMessage(Request $request) {
        
        Mail::to('dummy@topo-int.com')                
                ->send(new ContactFormMessage('sdf', 'sdf'));


        return view('message_successful');
    }
}
