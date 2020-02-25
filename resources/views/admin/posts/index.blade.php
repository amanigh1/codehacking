@extends('layouts.admin')

@section('content')

    <h3>Posts</h3>
    @include('includes.alerts')
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>User</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><img src='{{$post->photo ? $post->photo->file : 'https://placehold.it/50'}}'
                         class="card-img-overlay"  width="200" height="50" style="object-fit: cover"></td>
                <td><a href="{{route('posts.edit', $post->id)}}"> {{$post->user->name}}</a></td>
                <td>{{$post->category_id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
