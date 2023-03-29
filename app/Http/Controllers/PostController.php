<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Delete a single model
        $post = Post::find(1080);
        $post->delete();

        // Delete all records
        Post::trunacte();

        // Delete multiple records
        Post::destroy([1061, 1060]);
    }
}
