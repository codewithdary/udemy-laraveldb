<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // Count Rows
        DB::table('posts')->count();
        DB::table('posts')->where('is_published', true)->count();

        // Sum
        DB::table('posts')->sum('min_to_read');

        // Average
        DB::table('posts')->avg('min_to_read');
        DB::table('posts')->where('is_published', true)->avg('min_to_read');

        // Max
        DB::table('posts')->where('is_published', true)->max('min_to_read');

        // Min
        DB::table('posts')->where('is_published', true)->min('min_to_read');
    }
}
