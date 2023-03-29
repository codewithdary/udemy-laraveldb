<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // first()
        DB::table('posts')->where('id', 2)->first();

        // value()
        DB::table('posts')->where('id', 2)->value('excerpt');

        // find()
        DB::table('posts')->find(1);
    }
}
