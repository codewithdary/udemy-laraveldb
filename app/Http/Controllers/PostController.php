<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // exists()
        if(DB::table('posts')->where('id', 343543)->exists()) {
            echo 'Woohoo, I found a match';
        } else {
            echo 'Ahh, I have not found a match';
        }

        // doesntExist()
        if(DB::table('posts')->where('id', 343543)->doesntExist()) {
            echo 'Woohoo, I found a match';
        } else {
            echo 'Ahh, I have not found a match';
        }
    }
}
