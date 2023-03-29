<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // Create user & model with one instance
        $user = User::create([
            'name' => 'Code With Dary',
            'email' => 'info@codewithdary.com',
            'password' => 'Test1234!',
        ]);

        $user->contact()->create([
            'address' => 'test',
            'number' => 43,
            'city' => 'Amsterdam',
            'zip_code' => '48395db'
        ]);

        // Retrieve user with contact data
        $user = User::with('contact')->find(5);

        // Output contact data
        $user->contact->address;
    }
}
