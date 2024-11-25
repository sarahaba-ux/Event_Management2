<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;

Route::get('/home', [HomeController::class, 'home'])->name('homepage');
Route::get('/user/form', [HomeController::class, 'form'])->name('form');

// Role Routes
Route::get('/', function () {
    return view('user_role');
})->name('role');

Route::post('/user/admin', [RoleController::class, 'adminLogin'])->name('login.admin');
Route::post('/user/organizer', [RoleController::class, 'organizerLogin'])->name('login.organizer');

// Error Page Route
Route::get('/error', function () {
    return view('error');
})->name('error.page');

// Organizer Routes (for guests and authenticated users)
Route::get('/user/organizer', function () {
    return view('organizer_dashboard'); // Adjust with the actual view for guests
})->name('organizer.dashboard')->middleware('guest');

// Authenticated user can access this route
Route::get('/user/organizer/dashboard', function () {
    return view('organizer_dashboard'); // Adjust with the actual view
})->middleware('auth');

// Some route with custom middleware for login error
Route::get('/some-route', [SomeController::class, 'someMethod'])->middleware('check.login.error');
