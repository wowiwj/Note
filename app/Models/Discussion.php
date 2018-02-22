<?php

namespace App\Models;

use App\Base\Fitters\DiscussionFilters;
use App\Base\Handler\ImageUploadHandler;
use App\Base\Service\Markdowner;
use App\Base\Traits\Favoritable;
use App\Base\Traits\RecordsActivity;
use App\Base\Traits\Subscribable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Discussion extends Model
{

    use RecordsActivity,Subscribable,Favoritable,SoftDeletes;
    protected $guarded = [];

    protected $with = ['user','tags'];

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
        return '/discussions/'.$this->id;
    }

    public function setContentAttribute($value)
    {

        $html = (new Markdowner())->convertMarkdownToHtml($value);
        $data = [
            'raw'  => $value,
            'html' => $html
        ];
        $this->makeArticleImage($html);
        $this->body = json_encode($data);
    }


    public function makeArticleImage($html){

        $pattern = "/[img|IMG].*?src=['|\"](.*?(?:[.gif|.jpg]))['|\"].*?[\/]?>/";
        preg_match($pattern,$html,$match);
        if (empty($match) || is_null($match[1])){
            return;
        }
        $discussion_image = (new ImageUploadHandler())
            ->makeArticleImage($match[1],'');
        $this->page_image = $discussion_image;
    }


    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    public function scopeFilter($query, DiscussionFilters $filters)
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
    }

    public function notify(){

        $user = $this->user;
        if (Auth::user()->id == $user->id){
            return;
        }

//        $user->notify(new ArticleWasSubscribed($this));
    }


    public function hasUpdatesFor($user){
        if (empty($user)) return true;

        $key = $user->visitedDiscussionCacheKey($this);
        return $this->updated_at > cache($key);

    }

    public function notifyFavorited(){

        $user = $this->user;
        if (Auth::user()->id == $user->id){
            return;
        }

//        $user->notify(new ArticleWasFavorited($this));

    }
}
