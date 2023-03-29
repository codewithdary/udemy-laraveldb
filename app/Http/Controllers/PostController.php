<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Retrieve all models
        Post::all();

        // Retrieve the count of all Models
        Post::all()->count();

        // Paginate through the Query Builder
        Post::paginate(25);
        Post::simplePaginate(25);
        Post::cursorPaginate(25);
    }
}
