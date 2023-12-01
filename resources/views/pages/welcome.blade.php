@extends('main')

@section('title', '| Home')

@section('content')
    <!-- Header Row Start -->
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
              <h1>Welcome to My Blog!</h1>
              <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
              <p><a class="btn btn-primary btn-lg" href="{{ route('posts.create') }}" role="button">Create Post</a></p>
            </div>
        </div>
    </div>
    <!-- Header Row Ends -->

    <div class="row">
        <div class="col-md-10">
            <!-- Loop through each post -->
            @foreach ($posts as $post)
                <div class="row">
                    <div class="col-md-8">
                        <div class="post">
                            <!-- Display post title -->
                            <h3>{{ substr($post->title, 0, 50) }} {{ strlen($post->title) > 50 ? "..." : "" }}</h3>
                            <!-- Display post body -->
                            <p>{{ substr($post->body, 0, 200) }} {{ strlen($post->body) > 200 ? "..." : "" }}</p>
                            <!-- Link to view full post -->
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-lg">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <!-- Optional content for the second column -->
                    </div>
                </div>
                <!-- Horizontal line between posts -->
                <hr>
            @endforeach            
        </div>

        <div class="col-md-2">
            <!-- Sidebar content -->
            <h2>SideBar</h2>
        </div>
    </div>
@endsection