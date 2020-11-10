<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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

Auth::routes();

Route::get('/', function () {
    return view('hometopo');
});

Route::get('/homes', function () {
    return view('welcome');
});

Route::get('careers', function () {
    return view('careers');
});

// Sends e-mail message from contact form to recipient
Route::post('send-message', 'LandingController@sendMessage')->name('send-message');

// Contact form message has been sent successfuly
Route::get('message-successful', function() {

    return view('message_successful');
    
})->name('message-successful');

// Contact form and information view
Route::get('contact', function() {
    return view('contact');
});