<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        Post::where('is_published', true)
            ->where('min_to_read', '>', 5)
            ->orderBy('title', 'desc')
            ->get();
    }
}
