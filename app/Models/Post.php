<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /*
     Change table
     protected $table = 'users';

    Change primary key
    protected $primaryKey = 'slug';

    Disable auto increment of the primary key
    public $incrementing = false;

    Change data type of the primary key
    protected $keyType = 'string';

    Disable timestamps on a model
    public $timestamps = false;

    Change dateTime format of timestamps
    public $timestamps = false;

    Rename the created_at and updated_at
    const CREATED_AT = 'date_created_at';
    const UPDATED_AT = 'date_updated_at';

    Add default attributes to your model (I recommend doing this on database-level
    protected $attributes = [
        "user_id" => 1,
        "is_published" => false,
        "description" => "Please add your description right here.."
    ];

    Change default database connection
    protected $connection = 'sqlite';
    */
}
