<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Specify exactly what data you need,
        DB::table('users')->select('name', 'email')->get();

        // Select with alias
        DB::table('posts')
            ->select('title as post_title')
            ->get();

        // Return only one row with specific value
        DB::table('posts')
            ->distinct()
            ->get();

        // Narrow distinct down to one column
        DB::table('posts')
            ->select('is_published')
            ->distinct()
            ->get();

        // using addSelect()
        $posts = DB::table('posts')->select('title');
        $added = $posts->addSelect('description')->get();
    }
}
