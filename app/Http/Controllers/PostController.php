<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // firstOrCreate()
        Post::firstOrCreate([
                'title' => 'Eloquent is Awesome'
            ],
            [
                "user_id" => 17,
                "title" => "firstOrCreate",
                "slug" => "first-or-create",
                "excerpt" => "Eloquent is awesome!!",
                "description" => "Even more awesome!!",
                "is_published" => true,
                "min_to_read" => 3
            ]
        );

        // firstOrNew()
        Post::firstOrNew([
                'title' => 'firstOrCreate3'
            ],
            [
                "user_id" => 17,
                "title" => "firstOrCreate NEW",
                "slug" => "first-or-create NEW",
                "excerpt" => "Eloquent is awesome!!",
                "description" => "Even more awesome!!",
                "is_published" => true,
                "min_to_read" => 3
            ]);
    }
}
