@extends('layouts.admin')

@section('content')

    <h3>Users</h3>
@include('includes.alerts')
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
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
                <td><img src='{{$user->photo ? $user->photo->file : 'https://placehold.it/50'}}' class="img-responsive img-circle" width="40" ></td>
                <td><a href="{{route('users.edit', $user->id)}}"> {{$user->name}}</a></td>

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
