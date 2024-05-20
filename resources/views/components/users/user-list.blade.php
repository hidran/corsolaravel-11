<nav>


    <ul class="list-group">
        @forelse ($users as $user)
            <li class="list-group-item">{{$loop->index + 1 }} {{ $user->name }}</li>

        @empty
            <li class="list-group-item">No data found</li>
        @endforelse
    </ul>
</nav>
