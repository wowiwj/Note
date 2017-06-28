<?php

namespace App\Models;


use App\Helpers\Fitters\ArticleFilters;
use App\Helpers\Handler\ImageUploadHandler;
use App\Helpers\Service\Markdowner;
use App\Helpers\Traits\RecordsActivity;
use App\Scopes\ArticleFitterScope;
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


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ArticleFitterScope);


    }


}
