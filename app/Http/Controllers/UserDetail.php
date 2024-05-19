<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserDetail extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, User $user): User
    {
        return $user;
    }
}
