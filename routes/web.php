<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::post('/', [UserController::class, 'authenticate']);

Route::get('/dashboard', function () {
    return view('dash.main.index');
})->name('dashboard')->middleware('auth');
