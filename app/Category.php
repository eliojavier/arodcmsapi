<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public function recentArticles()
    {
        return $this->belongsToMany(Article::class)
                                    ->orderBy('created_at', 'desc');

    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
