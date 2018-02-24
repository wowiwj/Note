<?php

namespace App\Models;

use App\Base\Fitters\ArticleFilters;
use App\Base\Handler\ImageUploadHandler;
use App\Base\Service\Markdowner;
use App\Base\Traits\ContentSetable;
use App\Base\Traits\Favoritable;
use App\Base\Traits\RecordsActivity;
use App\Base\Traits\Subscribable;
use App\Notifications\ArticleWasFavorited;
use App\Notifications\ArticleWasSubscribed;
use App\Scopes\ArticleFitterScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{


    use RecordsActivity,Subscribable,Favoritable,ContentSetable,SoftDeletes;
    protected $guarded = [];

    protected $with = ['category','user','tags'];

    protected $appends = [
        'isSubscribed',
        'favoritesCount' => 'favorites_count',
        'isFavorited' => 'is_favorited',
        'lastComment'
    ];


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


    public function drafts()
    {
        return $this->morphMany(Draft::class,'relation');
    }

    public function currentDraft(){
        return $this->belongsTo(Draft::class,'draft_id','id');
    }


    public function path()
    {
        return '/articles/'.$this->category->slug.'/'.$this->id;
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

    public function getlastCommentAttribute(){

        $lastComment = $this->comments()->latest()->first();
        return $lastComment;
    }

    public function syncTags($tags){
        $tags = collect($tags)->map(function ($tag){

            $tag = Tag::where('id',$tag['id'])
                ->orWhere('name',$tag['name'])
                ->firstOrCreate([
                    'name' => $tag['name']
                ]);
            return $tag->id;
        });
        $this->tags()->sync($tags);
        return $this;

    }


    public function getBriefAttribute(){

        $body = $this->body;
        $html = json_decode($body,true)['html'];

        $text = strip_tags($html);

        return mb_substr($text,0,200);

    }


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ArticleFitterScope);


    }

    public function notify(){

        $user = $this->user;
        if (Auth::user()->id == $user->id){
            return;
        }

        $user->notify(new ArticleWasSubscribed($this));
    }


    public function hasUpdatesFor($user){
        if (empty($user)) return true;

        $key = $user->visitedArticleCacheKey($this);
        return $this->updated_at > cache($key);

    }

    public function notifyFavorited(){

        $user = $this->user;
        if (Auth::user()->id == $user->id){
            return;
        }

        $user->notify(new ArticleWasFavorited($this));

    }

}
