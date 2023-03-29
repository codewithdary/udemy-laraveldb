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
                ->lockForUpdate()
                ->decrement('balance', 100);

            DB::table('users')
                ->where('id', 2)
                ->lockForUpdate()
                ->increment('balance', 100);

            /*
             DB::table('users')
              ->where('id', 1)
              ->sharedLock()
              ->decrement('balance', 100);
             */
        });

    }
}
