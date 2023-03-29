<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'number', 'company_id'
    ];
}
