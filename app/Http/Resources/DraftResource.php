<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DraftResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'ref' => $this->ref,
            'user' => new UserResource($this->whenLoaded('user')),
            'title' => $this->title,
            'body' => $this->body,
            'relation' => $this->relation
        ];
    }

}
