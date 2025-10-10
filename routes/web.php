<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('index');
});

Route::get('/home', function () {
    return view('frontend.home');
});

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/academics', function () {
    return view('frontend.academics');
})->name('academics');

Route::get('/gallery', function () {
    return view('frontend.gallery');
})->name('gallery');


//Post requests
Route::post('/contact/send', [ContactController::class, 'store'])->name('contact.send');