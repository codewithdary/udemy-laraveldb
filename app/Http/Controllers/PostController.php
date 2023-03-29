<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // whereBetween()
        DB::table('posts')->whereBetween('min_to_read', [1, 5])->get();

        // whereNotBetween()
        DB::table('posts')->whereNotBetween('min_to_read', [1, 5])->get();

    }
}
