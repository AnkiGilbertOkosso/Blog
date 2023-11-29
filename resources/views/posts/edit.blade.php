@extends('main')

@section('title', '| Edit Post')

@section('content')
    <div class="row">
        <!-- Edit Post Form -->
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">
            <!-- Title Input -->
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

            <!-- Body Textarea -->
            {{ Form::label('body', 'Edit Body:') }}
            {{ Form::textarea('body', null, ["class" => 'form-control']) }}
        </div>

        <!-- Sidebar with Post Information and Actions -->
        <div class="col-md-4">
            <div class="card">
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

                    <!-- Cancel and Save Changes Buttons -->
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                        </div>
                        <div class="col-sm-6">
                            {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection