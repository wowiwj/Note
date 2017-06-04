<?php

namespace App\Models;

use App\Helpers\Markdowner;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];


    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function commentable()
    {
        return $this->morphTo();
    }

    public function setContentAttribute($value)
    {
        $data = [
            'raw'  => $value,
            'html' => (new Markdowner())->convertMarkdownToHtml($value)
        ];

        $this->body = json_encode($data);
    }

    protected static function boot()
    {
        parent::boot();

//        static::created(function ($comment) {
//            $comment->commentable->increment('replies_count');
//        });
//
//        static::deleted(function ($comment) {
//            $comment->commentable->decrement('replies_count');
//        });


    }


}
