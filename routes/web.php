<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Artisan;



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

//Auth::routes();

Route::get('/', function() {
    return view('job_posts_panel');
});

// Route::get('/', function () {
//     return view('hometopo');
// });

Route::get('/homes', function () {
    return view('welcome');
});

Route::get('careers', function () {
    return view('careers');
});

// Sends e-mail message from contact form to recipient
Route::get('send', 'LandingController@sendMessage')->name('send-message');

// Contact form message has been sent successfuly
Route::get('message-successful', function() {

    return view('message_successful');
    
})->name('message-successful');

// Contact form and information view
Route::get('contact', function() {
    return view('contact');
});

// Clear cache
Route::get('cache', function() {

    $configCache = Artisan::call('config:cache');
    $clearCache = Artisan::call('cache:clear');
    
    return 'cache cleared';
});

Route::get('/home', 'HomeController@index')->name('home');

/*
|------------------------
| Job post relates routes
|------------------------
*/
// Query all of the existing job posts
Route::get('/index-job-posts', 'JobPostController@index');
// Create job post and store it to the data base
Route::post('/create-job-post', 'JobPostController@store');
// Query a particular job post by making an xmlhttp request to the JobPost controller
Route::get('/get-job-post/{jobPostId}', 'JobPostController@show');
// Send an automated e-amil whenever a user applies to a open role
Route::get('/send', 'JobPostController@sendMail');