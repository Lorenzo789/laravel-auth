@extends('layouts.app')

@section('content')
<div class="container">
    @if ( session('created') ) 
        <div class="alert alert-success">
            <h1>{{ session('created') }} has created succesfully</h1>
        </div>
    @elseif ( session('edited') )
        <div class="alert alert-success">
            <h1>{{ session('edited') }} has been modified succesfully</h1>
        </div>
    @endif
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