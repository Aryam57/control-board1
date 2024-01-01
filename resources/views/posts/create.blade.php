@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>

            <label for="content">Content:</label>
            <textarea name="content" id="content" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
