@extends('layouts.admin')

@section('content')

    <h3>Edit Post</h3>

    @include('includes.errors')
    {!! Form::model($post, ['method'=> 'PATCH', 'action' => ['AdminPostsController@update', $post->id], 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control','placeholder'=>'Title']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category') !!}
        {!! Form::select('category_id', ['' => 'Choose Category'] + $categories, null, ['class'=>'form-control']); !!}
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
        {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-xs-6']) !!}
    </div>

    {!! Form::close() !!}

{{--    Deleting Form--}}

    {!! Form::open(['method'=> 'delete', 'action' => ['AdminPostsController@destroy', $post->id]]) !!}

    <div class="form-group">
       {!! Form::submit('Delete', ['class'=>'btn btn-danger pull-right']) !!}
    </div>

    {!! Form::close() !!}

@endsection
