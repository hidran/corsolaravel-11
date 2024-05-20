<x-layouts.default>
    <x-slot:title>
        {{$title}}
    </x-slot:title>
    <div>
        <h1>{{$title}}</h1>
       
        <x-users.user-list :users="$staff"/>
    </div>
</x-layouts.default>
