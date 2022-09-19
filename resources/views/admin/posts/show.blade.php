@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card w-50 mx-auto">
            <div class="card-header p-0">
                <img src="{{ $post->post_image }}" class="w-100" alt="">
            </div>
            <div class="card-body text-center">
                <div>
                    <h3 class="card-title py-2">{{ $post->title }}</h3>
                </div>
                <p class="card-text">{{ $post->post_content }}</p>
            </div>
            <div class="card-footer text-muted">
                <pre>{{ $post->author }} | {{ $post->post_date }}</pre>
            </div>
        </div>
    </div>
@endsection