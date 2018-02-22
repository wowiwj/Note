<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class FavoriteResource extends Resource
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
            'created_at' => $this->created_at->toDateTimeString(),
            'type' => snake_case(class_basename($this->favorited_type)),
            'user' => new UserResource($this->whenLoaded('user'))
        ];

    }
}
