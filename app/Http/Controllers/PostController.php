<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Delete one row
        DB::table('posts')
            ->where('id', 1017)
            ->delete();

        // Delete based on multiple conditions
        DB::table('posts')
            ->where('id', 1014)
            ->where('title', 'x')
            ->delete();

        // Delete all records
        DB::table('posts')
            ->truncate();
    }
}
