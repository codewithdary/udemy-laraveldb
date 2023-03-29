<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Update one row
        DB::table('posts')
            ->where('id', 1000)
            ->update([
                'excerpt' => 'Laravel 10',
                'description' => 'Laravel 10'
            ]);

        // Update multiple rows
        DB::table('posts')
            ->where('id', '>', 1000)
            ->update([
                'excerpt' => 'Laravel 10',
                'description' => 'Laravel 10'
            ]);

        // Update multiple conditions
        DB::table('posts')
            ->where('id', 1000)
            ->orWhere('id', 1001)
            ->update([
                'excerpt' => 'Laravel 10x',
                'description' => 'Laravel 10x'
            ]);

        // Increment
        DB::table('posts')
            ->where('min_to_read', 1000)
            ->increment('min_to_read');

        // Decrement
        DB::table('posts')
            ->where('id', 1000)
            ->decrement('min_to_read', 4);

        // Increment or decrement multiple columns
        DB::table('posts')
            ->incrementEach(['min_to_read', 'lines']);

        // updateOrInsert
        DB::table('posts')
            ->updateOrInsert(
                ['excerpt' => 'Laravel 10x'],
                ['id' => 1000]
            );
    }
}
