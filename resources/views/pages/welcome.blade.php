
 @extends('main')

@section('title', '| Home')

@section('content')
 <!-- header row start   -->
        <div class="row"> 
            <div class="col-md-12 text-center py-5">
                <div class="display-4">
                    <h1>Welcome to my blog!</h1>
                    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos aut ex ullam neque assumenda, recusandae odit velit, suscipit excepturi soluta a eius inventore debitis in corrupti. Architecto qui quisquam illum.</p>
                    <p><a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create New Blog Post</a></p>
                </div>
            </div>
        </div>
        <!-- header row ends   -->
        <div class="row">
            <div class="col-md-10">
                @foreach ($posts as $post)
                <div class="row">
                    <div class="col-md-8">
                        <div class="post">
                            <h3>{{ substr($post->title, 0, 50) }} {{strlen($post->title) > 50 ? "..." : "" }}</h3>
                            <p>{{ substr($post->body, 0, 200) }} {{strlen($post->body) > 200 ? "..." : "" }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-lg">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        {{-- <img src="{{ asset('images/' . $post->image) }}" class="rounded float-end" alt="..." height="200" width="200"> --}}
                    </div>
                </div>
                <hr>
                @endforeach            
            </div>

            <div class="col-md-2">
                <h2>SideBar</h2>
            </div>
        </div>
@endsection