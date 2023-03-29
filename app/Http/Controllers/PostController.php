<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        DB::table('posts')
            ->orderBy('id')
            ->chunk(150, function($posts) {
                foreach ($posts as $post) {
                    echo $post->title;
                }
            });
    }
}
