<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::view('/', 'index')->name('index');

Auth::routes();

Route::get(
    '/home',
    [HomeController::class, 'index']
)->name('home');

Route::resource('users', UserController::class);
Route::resource('tasks', TaskController::class);
