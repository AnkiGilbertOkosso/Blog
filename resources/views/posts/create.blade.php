@extends('main')

@section('title', '| Create New Post')

@section('content')
    <div class="row">
        <!-- Create New Post Form -->
        <div class="col-md-8 d-grid gap-2">
            <h1>Create a New Blog Post</h1>
            <hr>

            <!-- Open a form for creating a new post -->
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                
                <!-- Title Input -->
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                <!-- Body Textarea -->
                {{ Form::label('body', 'Post Body:') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => ''))}}

                <!-- Featured Image Upload -->
                {{ Form::label('featured_image', 'Upload Featured Image') }}
                {{ Form::file('featured_image') }}

                <!-- Submit Button -->
                {{ Form::submit('Create Post', array('class' => 'btn btn-primary btn-lg', 'style' => 'margin-top: 20px')) }}

            <!-- Close the form -->
            {!! Form::close() !!}
        </div>
    </div>
@endsection