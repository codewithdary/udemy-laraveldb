<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
            ->orderBy('id')
            ->cursorPaginate(10);

        return view('posts.index', compact('posts'));
    }
}
