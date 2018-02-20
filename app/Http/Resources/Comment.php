<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\UserResource as UserCollection;

class Comment extends Resource
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
            'body' => $this->body,
            'created_at' => $this->created_at->toDateTimeString(),
            'is_favorite' => $this->isFavorited,
            'favorite_count' => $this->favoritesCount,
            'user' => new UserCollection($this->user)
        ];
    }
}
