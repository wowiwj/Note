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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($tag){
            if ($tag->slug == null){
                $tag->slug = $tag->name;
            }


        });
    }
}
