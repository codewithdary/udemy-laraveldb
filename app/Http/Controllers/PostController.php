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
        // Create Country
        $country = Country::create([
            'name' => 'Netherlands',
            'code' => 'NL'
        ]);

        // Find a user and set country id
        User::where('id', 5)->update([
            'country_id' => $country->id
        ]);

        // Eager load country with its associated posts
        $country = Country::with('posts')->get();
    }
}
