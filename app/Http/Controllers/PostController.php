<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\PhoneNumber;
use App\Models\Post;
use App\Models\User;
use App\Models\Video;

class PostController extends Controller
{
    public function index()
    {
        // Retrieve latest & oldest image of user
        $latestImage = User::find(5)->LatestImage();
        $oldestImage = User::find(5)->oldestImage();
    }
}
