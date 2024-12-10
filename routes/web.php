<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;

// Registration Route
Route::post('/register', [RoleController::class, 'store'])->name('register.submit');
Route::get('/user/form', [HomeController::class, 'form'])->name('form');
Route::get('/home', [HomeController::class, 'home'])->name('homepage');

// Role Selection Route
Route::get('/', function () {
    return view('user_role');
})->name('role');

// Login Page Route
Route::get('/login', function () {
    return view('login'); 
})->name('login');

// Login Actions for Admin and Organizer (Make sure this is pointing to the correct method in RoleController)
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Error Page Route
Route::get('/error', function () {
    return view('error');
})->name('error.page');

// Admin Dashboard Route
Route::get('/admin-dashboard', function () {
    // user has the 'admin' role
    if (Auth::check() && Auth::user()->role === 'admin') {
        return view('admindashboard');
    }
    return redirect()->route('login')->withErrors(['error' => 'Unauthorized access']);
})->name('admindashboard');

// Organizer Dashboard Route
Route::get('/organizer-dashboard', function () {
    if (Auth::check() && Auth::user()->role === 'organizer') {
        return view('homepage');
    }
    return redirect()->route('login')->withErrors(['error' => 'Unauthorized access']);
})->name('homepage');


// Event Routes
Route::get('/events/{id}/rsvp', [EventController::class, 'show'])->name('event.rsvp');
Route::post('/events/{id}/rsvp', [EventController::class, 'rsvp']);
Route::get('/events/{id}/attendees', [EventController::class, 'attendees'])->name('event.attendees');
