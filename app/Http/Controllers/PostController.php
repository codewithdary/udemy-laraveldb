<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Retrieve based on the primary key (RETURNS NULL)
        Post::find(1000);

        // Retrieve based on the primary key (RETURNS ERROR)
        Post::findOrFail(1000);

        // Retrieve based on a condition
        Post::where('slug', 'ullam-rerum-rem-esse-voluptatem-non-necessitatibus-iste-hic')->first();
        Post::firstWhere('slug', 'est-cum-odit-tempora-voluptates-quis-eligendi');

        // Retrieve a specific row based on a custom attribute
        Post::where('slug', 'est-cum-odit-tempora-voluptates-quis-eligendi')->firstOrFail();
    }
}
