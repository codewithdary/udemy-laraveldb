<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // whereFullText()
        DB::table('posts')
            ->whereFullText('description', 'quo')
            ->get();

        // orWhereFullText()
        DB::table('posts')
            ->whereFullText('description', 'quo')
            ->orWhereFullText('description', 'Doloribus')
            ->get();
    }
}
