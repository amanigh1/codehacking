@extends('layouts.admin')

@section('content')

    <h3>Users</h3>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Photo</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><a href="{{route('users.edit', $user->id)}}"> {{$user->name}}</a></td>
                <td><img src={{$user->photo ? $user->photo->file : 'https://placehold.it/50'}} alt="" width="50" height="50"></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->status? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
