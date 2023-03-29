<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // limit()
        DB::table('posts')->limit(10)->get();

        // offset()
        DB::table('posts')->offset(10)->limit(10)->get();
    }
}
