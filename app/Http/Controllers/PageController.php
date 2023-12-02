<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PageController extends Controller
{
    public function welcome() {
        $posts = Post::all();
        return view('pages.welcome')->withPosts($posts);
    }

    public function contact() {
        return view('pages.contact');
    }
}
