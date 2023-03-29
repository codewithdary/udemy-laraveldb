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
        // Retrieve post
        $post = Post::find(1000);

        // Create a new comment associated with a post using
        $postComment = $post->comments()->create([
            'body' => 'This is a new comment'
        ]);

        // Output all Comments of a Post
        foreach($post->comments as $comment) {
            echo $comment->body . "\n";
        }

        // Create Video
        $video = Video::create([
            'title' => 'John Wick 4',
            'url' => 'I do not have a rip',
            'description' => 'Keanu Reeves is awesome'
        ]);

        $videoComment = $video->comments()->create([
            'body' => 'This is a new comment'
        ]);

    }
}
