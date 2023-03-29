<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // Create three new tags
        Tag::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::create(['name' => 'Symfony', 'slug' => 'symfony']);
        Tag::create(['name' => 'Tailwind CSS', 'slug' => 'tailwindcss']);

        // Create a tagIds variable
        $tagIds = [1, 2, 3];

        // Create a post instance
        $post = Post::find(1000);

        // Add data to pivot table
        $post->tags()->attach($tagIds);

        // Retrieve tags of a post
        foreach($post->tags as $tag) {
            echo $tag;
        }

        // Detach (remove) data from pivot table
        $post->tags()->detach(1); // One single row based on the tag_id
        $post->tags()->detach([1, 2]); // Multiple rows based on the tag_ids
        $post->tags()->detach(); // Remove all data based on the post_id from the post instance

        // Updating records in pivot table
        $post->tags()->updateExistingPivot(1, [
            'tag_id' => 6
        ]);
    }
}
