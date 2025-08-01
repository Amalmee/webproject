<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// This custom route tells Laravel to show your specific login page when the /login URL is accessed.
Route::get('/login', function () {
    return view('login');
})->name('login');

// This custom route tells Laravel to show your specific register page when the /register URL is accessed.
Route::get('/register', function () {
    return view('register');
})->name('register');


// The rest of your routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {
    return view('product');
})->name('product');

Route::get('/grooming', function () {
    return view('grooming');
})->name('grooming');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/helloexam', function () {
    return view('helloexam');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';