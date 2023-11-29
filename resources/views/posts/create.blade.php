@extends('main')

@section('title', '| Create New Post')
    
@section('content')

<div class="row">
    <div class="col-md-8 d-grid gap-2">
        <h1>Create a New Blog Post</h1>
        <hr>

        {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true]) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

            {{ Form::label('body', 'Post Body:') }}
            {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => ''))}}

            {{ Form::label('featured_image', 'Upload Featured Image') }}
            {{ Form::file('featured_image') }}

            {{ Form::submit('Create Post', array('class' => 'btn btn-primary btn-lg', 'style' => 'margin-top: 20px' ))}}
        {!! Form::close() !!}


    </div>
</div>


@endsection