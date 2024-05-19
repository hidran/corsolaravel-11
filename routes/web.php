<?php

use App\Http\Controllers\UserDetail;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UsersController::class);
Route::get('users/{user}/details', UserDetail::class)->name('users.details');
Route::get('/', static fn() => view('welcome'));

