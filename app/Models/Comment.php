<?php

namespace App\Models;

use App\Base\Service\Markdowner;
use App\Base\Traits\Favoritable;
use App\Base\Traits\RecordsActivity;
use App\Notifications\CommentWasFavorited;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{

    use Favoritable,RecordsActivity,SoftDeletes;

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

    public function getContentHtmlAttribute(){


    }

    public function path()
    {
        return $this->commentable->path() . "#comment-{$this->id}";
    }

    public function notifyFavorited(){

        $user = $this->user;
        if (Auth::user()->id == $user->id){
            return;
        }

        $user->notify(new CommentWasFavorited($this));

    }

    public function notifyBestAnswer(){

        $user = Auth::user();

        $discussion = $this->commentable;

        $subscriptions = $discussion->subscriptions()->where('user_id','!=',$user->id)->get();

        $subscriptions->each->notifyUpdateBestAnswer($this,$user);

    }



}
