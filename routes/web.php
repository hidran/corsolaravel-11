<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('users', static function () {
    return User::all();
});

Route::get('users/{name?}/{email?}/{age?}',
    static function (?string $name = '', ?string $email = '', ?int $age = 0) {
        return "$name $email $age";
    })
    ->whereAlpha('name')
    ->whereAlpha('email')
    ->whereNumber('age');

Route::get('users/{user}', static function (User $user) {
    return $user;
})
    ->whereNumber('id');
Route::get('/', static fn() => view('welcome'));
