<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // insert()
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'title' => 'Insert through the DB facade 2',
                'slug' => 'insert-through-the-db-facade-2',
                'excerpt' => 'excerpt',
                'description' => 'description',
                'is_published' => true,
                'min_to_read' => 2,
            ],
            [
                'user_id' => 1,
                'title' => 'Insert through the DB facade 3',
                'slug' => 'insert-through-the-db-facade-3',
                'excerpt' => 'excerpt',
                'description' => 'description',
                'is_published' => true,
                'min_to_read' => 2,
            ]
        ]);

        // insertOrIgnore()
        DB::table('posts')->insertOrIgnore([
            [
                'user_id' => 1,
                'title' => 'X',
                'slug' => 'x',
                'excerpt' => 'excerpt',
                'description' => 'description',
                'is_published' => true,
                'min_to_read' => 2,
            ],
            [
                'user_id' => 1,
                'title' => 'Insert through the DB facade 3',
                'slug' => 'insert-through-the-db-facade-3',
                'excerpt' => 'excerpt',
                'description' => 'description',
                'is_published' => true,
                'min_to_read' => 2,
            ]
        ]);

        // upsert()
        $posts = DB::table('posts')->upsert([
            [
                'user_id' => 1,
                'title' => 'X',
                'slug' => 'x',
                'excerpt' => 'Updated excerpt',
                'description' => 'Updated description',
                'is_published' => true,
                'min_to_read' => 2,
            ],
        ], ['title', 'slug']);
    }
}
