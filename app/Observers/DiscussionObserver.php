<?php
/**
 * Created by PhpStorm.
 * User: wangju
 * Date: 2018/2/27
 * Time: 下午4:02
 */

namespace App\Observers;


use App\Base\Handler\SlugTranslateHandler;
use App\Models\Discussion;

class DiscussionObserver
{
    public function saving(Discussion $discussion)
    {
        $discussion->slug = app(SlugTranslateHandler::class)->translate($discussion->title);
    }

}