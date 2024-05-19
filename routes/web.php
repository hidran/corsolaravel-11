<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', static fn() => view('welcome'));
Route::get('users', static function () {
    return User::all();
});
//Route::get('users/{id}', static function (int $id) {
//    return User::where('id', $id)->first();
//})
//    //  ->where(['id' => '[0-9]+']);
//    //->where('id', '[0-9]+');
//    ->whereNumber('id');
Route::get('users/{user}', static function (User $user) {
    return $user;
})
    ->whereNumber('id');
