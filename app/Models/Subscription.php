<?php

namespace App\Models;

use App\Notifications\AnswerWasUpdateBest;
use App\Notifications\ArticleWasUpdated;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $guarded = [];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function notify($comment){
        $this->user->notify(new ArticleWasUpdated($comment));
    }


    public function notifyUpdateBestAnswer($discussion,$user){
        $this->user->notify(new AnswerWasUpdateBest($discussion,$user));
    }


}
