<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::view('/', 'index')->name('index');

Auth::routes();

Route::get(
    '/home',
    [HomeController::class, 'index']
)->name('home');
