<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;

Route::get('/home', [HomeController::class, 'home'] )->name('homepage');
//calling controller HomeController para ma view yung function na home na maga call sa view na homepage
Route::get('/user/form', [HomeController::class, 'form'] )->name('form');

Route::get('/', function () {
    return view('user_role');
})->name('role');

Route::post('/user/admin', [RoleController::class, 'adminLogin'])->name('login.admin');
Route::post('/user/organizer', [RoleController::class, 'organizerLogin'])->name('login.organizer');

// Error page route
Route::get('/error', function () {
    return view('error'); // Error view
})->name('error.page');

Route::get('/some-route', [SomeController::class, 'someMethod'])->middleware('check.login.error');