<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // lazy()
        DB::table('posts')
            ->orderBy('id')
            ->lazy()->each(function($post) {
                echo $post->title;
            });

        // lazilyById()
        DB::table('posts')
            ->where('id', 1)
            ->lazyById()
            ->first();
    }
}
