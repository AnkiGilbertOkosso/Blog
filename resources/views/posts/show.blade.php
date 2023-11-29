@extends('main')

@section('title', '| View Post')

@section('content')
    <div class="row">
        <!-- Left Column: Post Content -->
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <img src="{{ asset('images/' . $post->image) }}" alt="post image" height="500" width="500">
            <p class="lead">{{ $post->body }}</p>
        </div>

        <!-- Right Column: Post Information and Actions -->
        <div class="col-md-4">
            <div class="card --bs-secondary-bg-rgb">
                <div class="card-body">

                    <!-- Post Information -->
                    <dl class="dl-horizontal">
                        <dt>Created At:</dt>
                        <dd>{{ date('M j, Y h:i A', strtotime($post->created_at)) }}</dd>
                    </dl>

                    <dl class="dl-horizontal">
                        <dt>Last Updated:</dt>
                        <dd>{{ date('M j, Y h:i A', strtotime($post->updated_at)) }}</dd>
                    </dl>

                    <hr>

                    <!-- Post Actions: Edit and Delete -->
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection