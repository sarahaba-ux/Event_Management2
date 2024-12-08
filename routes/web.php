<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RSVPController;

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
// checks credentials provided in the request (username and password). user is redirected to /home with their username stored in the session; otherwise, they are sent to an error page.

// Error Page Route
Route::get('/error', function () {
    return view('error');
})->name('error.page');

// Some route with custom middleware for login error
Route::get('/some-route', [SomeController::class, 'someMethod'])->middleware('check.login.error');

// Route for creating an event
Route::post('/event/create', [EventController::class, 'create'])->name('event.create');

// Route for displaying the RSVP form
Route::get('/event/rsvp/{id}', [RSVPController::class, 'show'])->name('event.rsvp');

// Route for storing the RSVP data
Route::post('/event/rsvp', [RSVPController::class, 'store'])->name('rsvp.store');

// Route for displaying attendees of an event
Route::get('/event/attendees/{id}', [EventController::class, 'attendees'])->name('event.attendees');