<?php

namespace App\Transformers;


use App\Models\Comment;
use League\Fractal\TransformerAbstract;

class CommentTransformer extends TransformerAbstract
{
    protected $defaultIncludes = [
        'user'
    ];
    public function transform(Comment $comment){
        return [
            'id' => $comment->id,
            'body' => $comment->body,
            'created_at' => $comment->created_at->toDateTimeString(),
        ];
    }

    public function includeUser(Comment $comment)
    {

        $user = $comment->user;
        return $this->item($user, new UserTransformer);
    }


}