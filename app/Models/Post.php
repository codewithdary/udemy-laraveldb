<?php

namespace App\Models;

use App\Models\Scopes\PublishedWithinThirtyDaysScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes, Prunable, PostScopes;

    /**
     * @return void
     */
    protected static function booted(): void
    {
        static::addGlobalScope(new PublishedWithinThirtyDaysScope());
    }
    /*
     The `$fillable` property is an array that lists the fields that are allowed to be mass assigned.
     Any field not listed in the `$fillable` array will not be allowed to be mass assigned.
     This is useful when you want to allow the user to set specific fields of the model.
    */
    /**
     * @var string[]
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

    /**
     * @return Builder
     */
    public function prunable(): Builder
    {
        return static::where('created_at', '<=', now()->subMonth());
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return MorphToMany
     */
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    /**
     * @return MorphOne
     */
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
