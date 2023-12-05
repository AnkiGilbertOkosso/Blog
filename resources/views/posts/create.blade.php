@extends('layout')
@section('post_style')
<link rel="stylesheet" href="{{ asset('css/post_styles.css') }}">
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

@section('content')
    <div class="container mx-auto mt-8">
        <div class="max-w-md mx-auto bg-white p-8 border rounded-md shadow-md">
            <h2 class="text-2xl font-semibold mb-6">Create a New Blog Post</h2>

            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                    <input type="text" name="title" id="title" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mb-4" id="body_area">
                    <label for="body" class="block text-sm font-medium text-gray-600">Body</label>
                    <textarea name="body" id="body" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
                </div>

                <div class="mb-4">
                    <label for="tags" class="block text-sm font-medium text-gray-600">Tags</label>
                    <input type="text" name="tags" id="tags" class="mt-1 p-2 w-full border rounded-md" value="{{ old('tags') }}" placeholder="Enter tags">
                    <small class="form-text text-muted">Enter tags separated by commas (e.g., Laravel, PHP, Web Development).</small>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-600">Image</label>
                    <input type="file" name="image" id="image" accept="image/*" class="mt-1">
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-sm font-medium text-gray-600">Category</label>
                    <select name="category_id" id="category" class="mt-1 p-2 w-full border rounded-md">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Create Post
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
@endsection

