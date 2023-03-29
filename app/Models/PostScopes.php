<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

trait PostScopes
{
    /**
     * @param Builder $query
     * @return mixed
     */
    public function scopePublished(Builder $query)
    {
        return $query->where('is_published', true);
    }

    /**
     * @param Builder $query
     * @return mixed
     */
    public function scopeWithUserData(Builder $query)
    {
        return $query->join('users', 'posts.user_id', '=', 'users.id')
            ->select('posts.*', 'users.name', 'users.email');
    }

    /**
     * @param Builder $query
     * @param $userId
     * @return mixed
     */
    public function scopePublishedByUser(Builder $query, $userId)
    {
        return $query->where('user_id', $userId)
            ->whereNotNull('created_at');
    }
}
