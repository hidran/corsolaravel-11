<?php

namespace App\View\Components\users;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class UserList extends Component
{
    /**
     * Create a new component instance.
     * @param array<LengthAwarePaginator> $users
     */
    public function __construct(public $users)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users.user-list');
    }
}
