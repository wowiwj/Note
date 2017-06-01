<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $guarded = [];

//    protected $appends = ['articlesCount'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

//    public function getArticlesCountAttribute()
//    {
////        return 1;
//        return $this->articles;
//    }

}
