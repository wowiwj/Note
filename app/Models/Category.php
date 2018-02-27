<?php

namespace App\Models;

use App\Base\Traits\SlugTransable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use SlugTransable;


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

    public function path(){

        return '/articles/'.$this->slug;
    }

    protected static function boot()
    {
        parent::boot();

    }


}
