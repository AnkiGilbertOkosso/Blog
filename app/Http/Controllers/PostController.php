<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Session;
use File;
use Image;
use Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(3);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'tags' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'exists:categories,id'
        ]);

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('upload/' . $filename);
        Image::make($image)->save($location)->resize(640, 360);

        $post = new Post($request->all());

        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = Str::slug($request->input('title')) . '-' . Str::random(3);
        $post->image = $filename;

        $post->save();

        if ($request->has('tags')) {
            $tagNames = explode(',', $request->input('tags'));
            $tagIds = [];
            
            foreach ($tagNames as $tagName) {
                $tag = Tag::firstOrCreate(['name' => trim($tagName)]);
                $tagIds[] = $tag->id;
            }
    
            $post->tags()->attach($tagIds);
        }

        Session::flash('success', 'The blog post was successfully saved!');

        return redirect()->route('posts.show', $post->slug);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $categories = Category::withCount('posts')->get();

        return view('posts.show', compact('post', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        if ($request->file('image')) {
            // Delete the previous image if it exists
            $previousImage = $post->image;
            if ($previousImage) {
                $previousImagePath = public_path('upload/' . $previousImage);
                if (File::exists($previousImagePath)) {
                    File::delete($previousImagePath);
                }
            }
        }
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'exists:categories,id'
        ]);

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('upload/' . $filename);
        Image::make($image)->save($location)->resize(640, 360);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = Str::slug($request->input('title')) . '-' . Str::random(3);
        $post->image = $filename;

        $post->category()->associate($request->input('category_id'));
        $post->save($request->all());

        if ($request->has('tags')) {
            $tagNames = explode(',', $request->input('tags'));
            $tagIds = [];
            
            foreach ($tagNames as $tagName) {
                $tag = Tag::firstOrCreate(['name' => trim($tagName)]);
                $tagIds[] = $tag->id;
            }
    
            $post->tags()->attach($tagIds);
        }



        Session::flash('success', 'The blog post was successfully Updated!');

        return redirect()->route('posts.show', $post->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $imagePath = public_path('upload/' . $post->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }


        $post->delete();

        Session::flash('success', 'The blog post was successfully deleted!');

        return redirect()->route('posts.index');
    }
}
