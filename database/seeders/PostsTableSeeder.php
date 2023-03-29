<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = collect([
            [
                'title' => 'Post One',
                'slug' => 'post-one',
                'excerpt' => 'Excerpt of Post One',
                'description' => 'Description of Post One',
                'is_published' => true,
                'min_to_read' => 2
            ],
            [
                'title' => 'Post Two',
                'slug' => 'post-two',
                'excerpt' => 'Excerpt of Post Two',
                'description' => 'Description of Post Two',
                'is_published' => true,
                'min_to_read' => 2,
            ]
        ]);

        $posts->each(function ($post) {
            Post::create($post);
        });
    }
}
