<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    public function about(): View
    {
        return view('pages.about');
    }

    public function blog(): View
    {
        return view('pages.blog');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function staff(): View
    {
        $staff = User::paginate(10);
        //  $staff = [];
        $title = 'List of Staff';
        return view('pages.staff', compact('staff', 'title'));
    }
}
