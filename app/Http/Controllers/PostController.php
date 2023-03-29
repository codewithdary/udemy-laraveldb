<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // Access individual attributes from relationship
        $post = Post::find(1000);
        $user = $post->user->name;

        // Inverse (retrieves a collection because a user has many posts)
        $user = User::find(5);

        foreach($user->posts as $post) {
            echo "Title: $post->title" . "\n";
        }
    }
}
