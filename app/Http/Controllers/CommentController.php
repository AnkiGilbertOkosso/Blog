<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Session;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
            'body' => 'required|string|max:255'
        ]);

        $comment = new Comment($request->all());
        $comment->post_id = $post->id;
        $comment->body = $request->body;

        $comment->save();

        Session::flash('success', 'The comment was successfully saved!');
        return back();
    }
}
