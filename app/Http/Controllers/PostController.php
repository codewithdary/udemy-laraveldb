<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // One Column
        DB::table('posts')->pluck('title');

        // Multiple Columns
        DB::table('posts')->pluck('title','description');
    }
}
