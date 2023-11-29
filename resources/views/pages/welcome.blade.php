@extends('main')

@section('title', '| Home')

@section('content')
    <!-- Header Row Start -->
    <div class="row"> 
        <div class="col-md-12 text-center py-5">
            <div class="display-4">
                <h1>Welcome to my blog!</h1>
                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos aut ex ullam neque assumenda, recusandae odit velit, suscipit excepturi soluta a eius inventore debitis in corrupti. Architecto qui quisquam illum.</p>
                <p><a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create New Blog Post</a></p>
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