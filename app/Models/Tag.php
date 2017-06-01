<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $guarded = [];
    public function articles()
    {
        return $this->morphedByMany(Article::class,'taggable');
    }
}
