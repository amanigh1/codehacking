@extends('layouts.admin')

@section('content')

    <h3>Users</h3>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Photo</th>
            <th>Created</th>
            <th>Updated</th>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->status? 'Active' : 'Not Active'}}</td>
                <td>

                    <img src={{asset('uploads/'.$user->photo->file)}} alt="" width="30" height="30">
                    </td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
