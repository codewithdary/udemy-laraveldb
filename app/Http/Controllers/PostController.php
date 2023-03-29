<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // Lazy Loading
        Post::all();

        // Eager Loading
        Post::with('tags')->get();
    }
}
