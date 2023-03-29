<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\PhoneNumber;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // Create Record
        $user = User::find(5);
        $post = Post::find(1000);

        $userImage = $user->image()->create([
            'url' => 'https://example.com/image.jpg'
        ]);

        $postImage = $post->image()->create([
            'url' => '<https://example.com/image.jpg>'
        ]);

    }
}
