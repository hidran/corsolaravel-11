<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('about', [PagesController::class, 'about']);
Route::get('contact', [PagesController::class, 'contact']);
Route::get('staff', [PagesController::class, 'staff']);
Route::get('blog', [PagesController::class, 'blog']);
