<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // selectRaw()
        DB::table('posts')
            ->selectRaw('count(*) as post_count')
            ->first();

        // whereRaw()
        DB::table('posts')
            ->whereRaw('created_at > NOW() - INTERVAL 1 DAY')
            ->get();

        // havingRaw()
        DB::table('posts')
            ->select('user_id', DB::raw('SUM(min_to_read) as total_time'))
            ->groupBy('user_id')
            ->havingRaw('SUM(min_to_read) > 10')
            ->get();

        // orderByRaw()
        DB::table('posts')
            ->orderByRaw('created_at DESC')
            ->get();

        // groupByRaw()
        DB::table('posts')
            ->select('user_id', DB::raw('AVG(rating) as avg_rating'))
            ->groupByRaw('user_id')
            ->get();
    }
}
