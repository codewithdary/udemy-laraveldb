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
        // Create a new Company
        $company = Company::create([
            'name' => 'Apple',
            'user_id' => 5,
        ]);

        // Create a new Phone Number
        PhoneNumber::create([
            'number' => 48593953,
            'company_id' => $company->id
        ]);

        // Retrieve phone number of the company where the use works
        $user = User::find(5)->companyPhoneNumber()->get();

        // Use Eager Loading
        $user = User::with('companyPhoneNumber')->get();
    }
}
