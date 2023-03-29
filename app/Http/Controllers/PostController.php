<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // Use scopePublished()
        Post::published()->get();

        // use scopeWithUserData()
        Post::withUserData()->get();
    }
}
