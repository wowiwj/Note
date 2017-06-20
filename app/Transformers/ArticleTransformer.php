<?php

namespace App\Transformers;


use App\Models\Article;
use App\Models\Category;
use League\Fractal\TransformerAbstract;

class ArticleTransformer extends TransformerAbstract
{

    protected $defaultIncludes = [
        'user','category'
    ];

    public function transform(Article $article){
        return [
            'id' => $article->id,
            'title' => $article->title,
            'page_image' => $article->page_image,
            'body' => $article->body,
            'is_original' => $article->is_original,
            'published_at' => $article->published_at
        ];
    }

    public function includeUser(Article $article)
    {
        $user = $article->user;
        return $this->item($user, new UserTransformer);
    }


    public function includeCategory(Article $article)
    {
        $category = $article->category;
        return $this->item($category, new CategoryTransformer);
    }


}