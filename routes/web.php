<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthenticationController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');


Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');


Route::get('/transactions', function () {
    if (Auth::user()->hasRole('admin')) {
        return view('transactions');
    }
    abort(403, 'Unauthorized');
})->middleware('auth')->name('transactions');


