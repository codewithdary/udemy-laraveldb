<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // Use dynamic scopePublishedByUser()
        Post::PublishedByUser(1)->get();
    }
}
