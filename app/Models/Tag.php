<?php

namespace App\Models;

use App\Base\Traits\SlugTransable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use SlugTransable;

    protected $guarded = [];
    public function articles()
    {
        return $this->morphedByMany(Article::class,'taggable');
    }

    public function discussions(){
        return $this->morphedByMany(Discussion::class,'taggable');
    }

    public function path($name = null){

        $path = '?tag='.$this->name;


        if ($name){
            return url()->route($name).$path;
        }

        return $path;

    }
}
