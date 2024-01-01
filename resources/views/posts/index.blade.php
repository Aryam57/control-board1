@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>
                <div class="card-body">
                    {{ $post->content }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
