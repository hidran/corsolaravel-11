<div>
    <h1>{{$title}}</h1>
    <ul>
        @foreach ($staff as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
