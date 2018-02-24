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

    public function discussions(){
        return $this->morphedByMany(Discussion::class,'taggable');
    }

    public function path(){

        return '?tag='.$this->name;

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
