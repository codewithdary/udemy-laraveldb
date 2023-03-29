<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\PhoneNumber;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        Job::create([
            'title' => 'Junior Web Developer',
            'description' => 'Test',
            'user_id' => 5,
            'active' => true
        ]);
        Job::create([
            'title' => 'Medior Web Developer',
            'description' => 'Test',
            'user_id' => 5,
            'active' => true
        ]);
        Job::create([
            'title' => 'Senior Web Developer',
            'description' => 'Test',
            'user_id' => 5,
            'active' => true
        ]);

        // Get the latest job of a user
        User::find(5)->latestJob()->get();

        // Get the oldest job of a user
        User::find(5)->oldestJob()->get();
    }
}
