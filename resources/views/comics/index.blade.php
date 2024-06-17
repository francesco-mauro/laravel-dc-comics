@extends('layouts.app')

@section('content')
    <h1>Comics</h1>
    <a href="{{ route('comics.create') }}">Create New Comic</a>
    <ul>
        @foreach ($comics as $index => $comic)
            <li>
                <a href="{{ route('comics.show', $index) }}">{{ $comic['title'] }}</a>
            </li>
        @endforeach
    </ul>
@endsection
