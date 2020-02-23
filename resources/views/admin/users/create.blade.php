@extends('layouts.admin')

@section('content')

    <h3>Create Users</h3>

        @include('includes.errors')
    {!! Form::open(['method'=> 'post', 'action' => 'AdminUsersController@store', 'files' => true]) !!}

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
        {!! Form::select('role_id', [''=>'Choose Options'] + $roles , '', ['class'=>'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::select('status', [0 => 'Not Active', 1 => 'Active'], 0, ['class'=>'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','Image') !!}
        {!! Form::file('photo_id',  ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
       {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection
