<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
// Home page for authenticated organizers
Route::get('/home', [HomeController::class, 'home'])->name('homepage');
Route::get('/user/form', [HomeController::class, 'form'])->name('form');

// Role Routes
Route::get('/', function () {
    return view('user_role');
})->name('role');

// Login actions for admin and organizer
Route::post('/user/admin', [RoleController::class, 'adminLogin'])->name('login.admin');
Route::post('/user/organizer', [RoleController::class, 'organizerLogin'])->name('login.organizer');

// Error Page Route
Route::get('/error', function () {
    return view('error');
})->name('error.page');

// Organizer Dashboard Routes
Route::get('/user/organizer', function () {
    return view('organizer_dashboard'); // Public view for guests
})->name('organizer.dashboard')->middleware('guest');

// Authenticated Organizer Landing Page
Route::get('/user/organizer/dashboard', [HomeController::class, 'home'])->middleware('auth');

// Some route with custom middleware for login error
Route::get('/some-route', [SomeController::class, 'someMethod'])->middleware('check.login.error');