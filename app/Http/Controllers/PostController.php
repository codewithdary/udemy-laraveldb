<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\PhoneNumber;
use App\Models\Post;
use App\Models\User;
use App\Models\Video;

class PostController extends Controller
{
    public function index()
    {
        $tagIds = [1, 2, 3];
        $post = Post::find(1000);

        // Add data to many to many polymorphic
        $post->tags()->attach($tagIds);
    }
}
