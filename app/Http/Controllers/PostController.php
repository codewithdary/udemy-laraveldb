<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // isDirty()
        $post = Post::find(1000);
        $post->title = "Let's see if the isDity method works...";

        $post->isDirty(); // true
        $post->isDirty('title'); // true
        $post->isDirty('excerpt'); // false
        $post->isDirty(['title', 'excerpt']); // true

        // isClean()
        $post = Post::find(1000);
        $post->isClean(); //true

        $post = Post::find(1000);
        $post->title = "It's unclean now!";
        $post->isClean(); // false
        $post->isClean('title'); // false
        $post->isClean(['title', 'excerpt']); // false

        // wasChanged()
        $post = Post::find(1000);
        $post->title = "It's unclean now!";
        $post->save();
    }
}
