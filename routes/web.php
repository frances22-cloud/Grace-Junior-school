<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('index');
});

Route::get('/home', function () {
    return view('frontend.home');
});