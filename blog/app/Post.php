<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['month_num'])) {
            $query->whereMonth('created_at', $filters['month_num']);
        }

        if (isset($filters['year'])) {
            $query->whereYear('created_at', $filters['year']);
        }
    }
}
