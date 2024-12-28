<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/jobs', 'jobs');
Route::view('/contact', 'contact');