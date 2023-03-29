<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Video extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title', 'url', 'description'
    ];

    /**
     * @return MorphMany
     */
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
