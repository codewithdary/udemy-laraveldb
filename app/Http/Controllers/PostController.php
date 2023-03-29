<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // one orderBy()
        DB::table('posts')
            ->orderBy('title', 'desc')
            ->get();

        // multiple orderBy() methods
        DB::table('posts')
            ->orderBy('title')
            ->orderBy('min_to_read')
            ->get();

        // latest()
        DB::table('posts')
            ->latest()
            ->get();

        // oldest()
        DB::table('posts')
            ->oldest()
            ->get();
    }
}
