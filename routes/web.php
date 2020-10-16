<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('hometopo');
});

Route::get('/homes', function () {
    return view('welcome');
});

Route::get('careers', function () {
    return view('careers');
});

// Send email
Route::get('mail', 'HomeController@sendMail');
/*
Route::get('mail', function() {
    $data=[
        "title"=>"Hello Laravel World",
        "content"=>"This is the e-mail´s body"
    ];

    Mail::send('emails.message', $data, function($message) {
        $message->to('nimayoh623@deselling.com', 'Laravel developer')->subject('Message from a lone Laravel developer');
    });
});
*/

// e-mail view
Route::get('m', function() {
    return view('emails.message');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Sends e-mail message from contact form to recipient
Route::post('send-message', 'HomeController@sendMessage')->name('send-message');
