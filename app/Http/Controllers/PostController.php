<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Create and replicate
        $post = Post::create([
            "user_id" => 17,
            "title" => "Replicating Models",
            "slug" => "replicating models",
            "excerpt" => "This tutorial is about replicating content",
            "description" => "This tutorial is about replicating content",
            "is_published" => true,
            "min_to_read" => 3
        ]);

        $newPost = $post->replicate()->fill([
            "title" => "Replicated!!",
            "slug" => "replicated"
        ]);

        // Find and replicate
        $post = Post::find(1084);

        $post->replicate()->fill([
            'title' => 'We have a new post ladies and gentlemen!',
            'slug' => 'we-have-a-new-post-ladies-and-gentlemen'
        ]);
    }
}
