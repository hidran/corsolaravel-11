<div>
    <h1>{{$title}}</h1>
    <ul>
        @if(count($staff))
            @foreach ($staff as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        @else
            <h1>No data found</h1>
        @endif
    </ul>
    <ul>

        @forelse ($staff as $user)
            <li>{{$loop->index + 1 }} {{ $user->name }}</li>

        @empty
            <h1>No data found</h1>
        @endforelse
    </ul>
</div>

