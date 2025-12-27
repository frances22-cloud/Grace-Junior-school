<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
