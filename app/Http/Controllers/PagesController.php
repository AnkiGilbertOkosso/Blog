<?php

namespace App\Http\Controllers;
use App\Models\Post;


class PagesController extends Controller{

    public function getIndex(){
        $posts = Post::all();

        return view('pages.welcome')->withPosts($posts);
    }
    public function getAbout(){
        $first = "Anki";
        $last = "Gilbert";
        $full = $first . " " . $last;
        return view('pages.about')->with("fullname", $full);
    }
    public function getContact() {
        return view('pages/contact');
    }
}