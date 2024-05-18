<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', static fn () => view('welcome'));
Route::get('users', static function () {
    //return view('users.index');
    // return '<h1>Hello world</h1>';

    //    foreach (range(0, 10) as $idx) {
    //        $user = new stdClass();
    //        $user->name = 'Hidran'.$idx;
    //        $user->lastName = 'Arias'.$idx;
    //        $users[] = $user;
    //    }

    // return $users;
    return User::all();
});
