<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('auth');
