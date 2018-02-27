<?php

namespace App\Observers;

use App\Base\Handler\SlugTranslateHandler;
use App\Models\Article;

class ArticleObserver
{


    public function saving(Article $article)
    {
        // 如 slug 字段无内容，即使用翻if ( ! $article->slug) {
        $article->slug = app(SlugTranslateHandler::class)->translate($article->title);

    }

}