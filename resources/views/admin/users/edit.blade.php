@extends('layouts.admin')

@section('content')

    <h3>Edit User</h3>

    <div class="row">
        <div class="col-sm-4">
            <img src={{$user->photo ? $user->photo->file : 'https://placehold.it/400'}} alt=""  class="img-responsive img-circle">
        </div>


        <div class="col-sm-8">
            @include('includes.errors')
            {!! Form::model($user,['method'=> 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}

            <div class="form-group">
                {!! Form::label('name','Name') !!}
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Name']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email','Email') !!}
                {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'Email']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password','Password') !!}
                {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Password']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password_confirmation','Password Confirmation') !!}
                {!! Form::password('password_confirmation', ['class'=>'form-control','placeholder'=>'Password Confirmation']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id','Role') !!}
                {!! Form::select('role_id',  $roles , null , ['class'=>'form-control']); !!}
            </div>

            <div class="form-group">
                {!! Form::label('status','Status') !!}
                {!! Form::select('status', [0 => 'Not Active', 1 => 'Active'], null, ['class'=>'form-control']); !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id','Image') !!}
                {!! Form::file('photo_id',  ['class'=>'form-control']) !!}
            </div>


                {!! Form::submit('Update User', ['class'=>'btn btn-primary col-xs-6']) !!}

            {!! Form::close() !!}

            {!! Form::open(['method'=> 'delete', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}
            {!! Form::submit('Delete!', ['class'=>'btn btn-danger pull-right']) !!}
            {!! Form::close() !!}




        </div>
    </div>
@endsection
