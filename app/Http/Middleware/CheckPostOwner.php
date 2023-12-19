<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Post;

class CheckPostOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $postId = $request->route('post');
        $post = Post::where('slug');

        // Check if the user is the owner of the post
        if ($post && auth()->id() !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
