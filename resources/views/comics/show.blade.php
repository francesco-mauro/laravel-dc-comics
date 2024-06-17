@extends('layouts.app')

@section('content')
    <h1>{{ $comic['title'] }}</h1>
    <p>{{ $comic['description'] }}</p>
    <a href="{{ route('comics.index') }}">Back to list</a>
@endsection
