<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('users', static function () {
    return User::all();
});

Route::view('users/{name?}/{email?}/{age?}', 'users.userDetails')
    ->whereAlpha('name')
    ->whereAlpha('email')
    ->whereNumber('age')
    ->defaults('age', 0);

Route::get('users/{user}', static function (User $user) {
    return $user;
})
    ->whereNumber('id');

Route::get('/', static fn () => view('welcome'));
Route::redirect('/', 'users');
