@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Title</th>
                <th>Post Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($post as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->author }}</a></td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->post_date }}</td>
            </tr>
                
            @empty
                
            @endforelse
        </tbody>
    </table>
</div>
@endsection