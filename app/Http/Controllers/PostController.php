<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Model Instance
        $post = Post::find(1000); // assuming we want to update post with id 1

        $post->title = "We have updated the title";
        $post->description = "And also the description";
        $post->save();

        // Using Eloquent (update all rows)
        Post::where()->update([
            "excerpt" => "Updated through Eloquent",
            "slug" => "we-have-updated-the-title"
        ]);

        // Using Eloquent (update a single row)
        Post::where('is_published', false)->update([
            "is_published" => true
        ]);
    }
}
