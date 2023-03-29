<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // Retrieve without scope
        User::withoutGlobalScopes()->get();
        Post::withoutGlobalScopes()->get();
    }
}
