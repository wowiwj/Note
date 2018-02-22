<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\UserResource as UserCollection;
use App\Http\Resources\CategoryResource as CategoryCollection;
use App\Http\Resources\TagResource as TagCollection;

class ArticleResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {


        return [
            'id' => $this->id,
            'title' => $this->title,
            'page_image' => $this->page_image,
            'body' => $this->body,
            'is_original' => $this->is_original,
            'published_at' => $this->published_at,
            'user' => new UserCollection($this->whenLoaded('user')),
            'category' => new CategoryCollection($this->whenLoaded('category')),
            'tags' => TagCollection::collection($this->whenLoaded('tags'))
        ];

    }
}
