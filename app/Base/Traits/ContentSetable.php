<?php

namespace App\Base\Traits;

use App\Base\Handler\ImageUploadHandler;
use App\Base\Service\Markdowner;

trait ContentSetable
{

    public function setContentAttribute($value)
    {

        $html = (new Markdowner())->convertMarkdownToHtml($value);
        $data = [
            'raw'  => $value,
            'html' => $html
        ];

        if (array_key_exists('page_image', $this->getAttributes())) {
            $this->makeContentImage($html);
        }

        $this->body = json_encode($data);
    }


    public function makeContentImage($html){

        $pattern = "/[img|IMG].*?src=['|\"](.*?(?:[.gif|.jpg]))['|\"].*?[\/]?>/";
        preg_match($pattern,$html,$match);
        if (empty($match) || is_null($match[1])){
            return;
        }
        $content_image = (new ImageUploadHandler())
            ->makeArticleImage($match[1],'');
        $this->page_image = $content_image;
    }

}