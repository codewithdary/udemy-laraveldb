<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Model Instance
        $post = new Post;

        $post->user_id = 17;
        $post->title = "Test Title";
        $post->slug = "test-title";
        $post->excerpt = "woohoo";
        $post->description = "Test";
        $post->is_published = true;
        $post->min_to_read = 3;
        $post->save();

        // Using the fill() method
        $post = new Post;
        $post->fill([
            "user_id" => 17,
            "title" => "Fill method",
            "slug" => "fill-method",
            "excerpt" => "fill method",
            "description" => "fill method",
            "is_published" => true,
            "min_to_read" => 3
        ]);

        // Using Eloquent magic with the create() method
        Post::create([
            "user_id" => 17,
            "title" => "Eloquent is Awesome",
            "slug" => "eloquent-is-awesome",
            "excerpt" => "Eloquent is awesome!!",
            "description" => "Even more awesome!!",
            "is_published" => true,
            "min_to_read" => 3
        ]);

        // Using the make() method
        Post::make([
            "user_id" => 17,
            "title" => "Eloquent is Awesome3",
            "slug" => "eloquent-is-awesome3",
            "excerpt" => "Eloquent is awesome!!",
            "description" => "Even more awesome!!",
            "is_published" => true,
            "min_to_read" => 3
        ]);
    }
}
