<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        DB::table('posts')
            ->when(function ($query) {
                return $query->where('is_published', true);
            })->get();
    }
}
