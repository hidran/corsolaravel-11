@extends('layouts.default')
@section('title',$title)

@section('content')
    <div>
        <h1>{{$title}}</h1>

        <x-users.user-list :users="$staff"/>
    </div>

@endsection

@section('script')
    @include('components.script', ['comment'=>'//coment'])

    <script>alert(window.name)</script>
@endsection

