<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // updateOrCreate()
        $post = Post::updateOrCreate(
            ['id' => 1000],
            [
                "user_id" => 17,
                "title" => "updateOrCreate",
                "slug" => "update-or-create",
                "excerpt" => "Eloquent is awesome!!",
                "description" => "Even more awesome!!",
                "is_published" => true,
                "min_to_read" => 3
            ]
        );

        // upsert()
        Post::upsert([
            "id" => 1000,
            "user_id" => 17,
            "title" => "Eloquent is Awesome",
            "slug" => "eloquent-is-awesome",
            "excerpt" => "Eloquent is awesome!!",
            "description" => "Even more awesome!!",
            "is_published" => true,
            "min_to_read" => 3
        ], ['id']);
    }
}
