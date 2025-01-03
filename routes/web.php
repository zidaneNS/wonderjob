<?php

use App\Http\Controllers\JobListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::view('/jobs', 'jobs.index');
// Route::view('/jobs/create', 'jobs.create');
// Route::view('/jobs/{joblist}', 'jobs.show');
// Route::view('/jobs/{joblist}/edit', 'jobs.edit');

// Route::view('/login', 'auth.login');
// Route::view('/register', 'auth.register');

Route::get('/jobs', [JobListController::class, 'index']);

Route::view('/contact', 'contact');