<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('about', [PagesController::class, 'about'])->name('pages.about');
Route::get('contact',
    [PagesController::class, 'contact'])->name('pages.contact');
Route::get('staff', [PagesController::class, 'staff'])->name('pages.staff');
Route::get('blog', [PagesController::class, 'blog'])->name('pages.blog');
