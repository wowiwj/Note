<?php
/**
 * Created by PhpStorm.
 * User: wangju
 * Date: 2018/2/27
 * Time: 下午4:12
 */

namespace App\Base\Traits;


use App\Base\Handler\SlugTranslateHandler;
use App\Jobs\TranslateSlug;

trait SlugTransable
{

    protected $translate = 'name';
    /**
     * Boot the trait.
     */
    protected static function bootSlugTransable()
    {
        static::saving(function ($model) {

            $attributes = $model->getAttributes();
            $translate = 'name';

            if (! array_key_exists('slug', $attributes)) {
               return;
            }

            if (array_key_exists('title', $attributes)) {
                $translate = 'title';
            }

            dispatch(new TranslateSlug($model,$translate));

        });
    }

}