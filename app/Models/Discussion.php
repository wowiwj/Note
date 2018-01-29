<?php

namespace App\Models;

use App\Helpers\Fitters\DiscussionFilters;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{

    protected $guarded = [];

    public function scopeFilter($query, DiscussionFilters $filters)
    {
        return $filters->apply($query);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }
}
