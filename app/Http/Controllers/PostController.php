<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        DB::transaction(function () {
            DB::table('users')
                ->where('id', 1)
                ->decrement('balance', 20);

            DB::table('users')
                ->where('id', 2)
                ->increment('balance', 20);
        });

    }
}
