@extends('layouts.app')

@section('content')
    <h1>Create New Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('comics.index') }}">Back to list</a>
@endsection
