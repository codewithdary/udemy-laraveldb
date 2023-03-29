<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        DB::table('posts')->insertGetId([
            'user_id' => 1,
            'title' => 'Insert through the insertGetId',
            'slug' => 'insert-through-the-insertgetid',
            'excerpt' => 'excerpt',
            'description' => 'description',
            'is_published' => true,
            'min_to_read' => 2,
        ]);
    }
}
