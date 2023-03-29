<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
            ->orderBy('is_published');

        $unorderedPosts = $posts->reorder()->get();
        // $unorderedPosts = $posts->reorder('title', 'desc')->get();

        dd($unorderedPosts);
    }
}
