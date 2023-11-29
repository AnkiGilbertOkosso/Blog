@extends('main')

@section('title', '| All Post')

@section('content')
    <div class="row">
        <!-- Page Title and Create Post Button -->
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create Post</a>
        </div>
        <hr>
    </div>

    <div class="row">
        <!-- Table to Display Posts -->
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th>Action</th>
                </thead>

                <tbody>
                    <!-- Loop through each post and display in the table -->
                    @foreach ($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ substr($post->title, 0, 20) }}{{ strlen($post->title) > 20 ? "..." : "" }}</td>
                            <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
                            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                            <td>
                                <!-- View and Edit buttons for each post -->
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection