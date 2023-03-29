<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /*
     The `$fillable` property is an array that lists the fields that are allowed to be mass assigned.
     Any field not listed in the `$fillable` array will not be allowed to be mass assigned.
     This is useful when you want to allow the user to set specific fields of the model.
    */
    protected $fillable = [
        "user_id",
        "title",
        "slug",
        "excerpt",
        "description",
        "is_published",
        "min_to_read"
    ];

    /*
     The $guarded property is an array that lists the fields that are not allowed to be mass assigned.
     Any field not listed in the $guarded array will be allowed to be mass assigned.
     This is useful when you want to prevent the user from setting specific fields of the model.
    */
    protected $guarded = ['is_published'];
}
