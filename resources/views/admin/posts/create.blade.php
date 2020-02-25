@extends('layouts.admin')

@section('content')

    <h3>Create Post</h3>

    @include('includes.errors')
    {!! Form::open(['method'=> 'post', 'action' => 'AdminPostsController@store', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control','placeholder'=>'Title']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category') !!}
        {!! Form::select('category_id', ['' => 'Choose Category'] + $categories, '', ['class'=>'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','Image') !!}
        {!! Form::file('photo_id',  ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('body','Description') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control']); !!}
    </div>




    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection
