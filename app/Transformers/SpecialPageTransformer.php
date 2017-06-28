<?php
/**
 * Created by PhpStorm.
 * User: wangju
 * Date: 2017/6/28
 * Time: 下午4:56
 */

namespace App\Transformers;


use App\Models\SpecialPage;
use League\Fractal\TransformerAbstract;

class SpecialPageTransformer extends TransformerAbstract
{

    public function transform(SpecialPage $page){
        return [
            'id' => $page->id,
            'title' => $page->title,
            'route' => $page->route,
            'body' => $page->body,
            'isShowNav' => (bool)$page->show_nav
        ];
    }

}