<?php

namespace App\Models;

use App\Helpers\Fitters\ArticleFilters;
use App\Helpers\Handler\ImageUploadHandler;
use App\Helpers\Service\Markdowner;
use App\Helpers\Traits\RecordsActivity;
use App\Helpers\Traits\Subscribable;
use App\Scopes\ArticleFitterScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{


    use RecordsActivity,Subscribable,SoftDeletes;
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

        $html = (new Markdowner)->convertMarkdownToHtml($value);
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

        // 压缩缩略图
        // todo
        if (empty($match) || is_null($match[1])){
            return;
        }

        $article_image = (new ImageUploadHandler())
                        ->makeArticleImage($match[1],'');

        $this->page_image = $article_image;
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

        return mb_substr($text,0,150);

    }


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ArticleFitterScope);


    }


}
