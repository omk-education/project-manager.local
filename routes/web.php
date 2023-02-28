<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;

Route::get(
    '/',
    [IndexController::class, 'index']
)->name('index');

Auth::routes();

Route::get(
    '/home',
    [HomeController::class, 'index']
)->name('home');

Route::group(
    ['middleware' => 'auth'],
    function () {
        Route::resource('tasks', TaskController::class);
        // ->middleware('can:junior')
        // ->middleware('can:senior');


        Route::resource('users', UserController::class)
            ->middleware(['can:senior']);
    }
);
