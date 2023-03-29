<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // whereNot()
        DB::table('posts')->whereNot('min_to_read', 1)->get();
        DB::table('posts')->whereNot('min_to_read', '>', 1)->get();

        // orWhereNot()
        DB::table('posts')
            ->where('min_to_read', '>', 5)
            ->orWhereNot('is_published', true)
            ->get();
    }
}
