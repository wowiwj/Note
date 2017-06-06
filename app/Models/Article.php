<?php

namespace App\Models;


use App\Helpers\Fitters\ArticleFilters;
use App\Helpers\Markdowner;
use App\Helpers\Traits\RecordsActivity;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{


    use RecordsActivity;
    protected $guarded = [];

    protected $with = ['category','user','tags'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }

    public function path()
    {
        return '/articles/'.$this->category->slug.'/'.$this->id;
    }

    public function setContentAttribute($value)
    {
        $data = [
            'raw'  => $value,
            'html' => (new Markdowner)->convertMarkdownToHtml($value)
        ];

        $this->body = json_encode($data);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class,'');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    public function scopeFilter($query, ArticleFilters $filters)
    {
        return $filters->apply($query);
    }





}
