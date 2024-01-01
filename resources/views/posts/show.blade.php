@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ $post->title }}</div>
            <div class="card-body">
                {{ $post->content }}
            </div>
        </div>

        <h2>Comments</h2>
        @foreach ($comments as $comment)
            <div class="card">
                <div class="card-body">
                    {{ $comment->content }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
