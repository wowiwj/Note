<?php

namespace App\Helpers\Handler;


use App\Models\Comment;
use App\Models\User;

class NotificationHandler
{

    protected $data;

    public $type;

    public $object;


    public function make($data){
        $this->data = $data;

        $this->mapObject();
        return $this;
    }

    private function mapObject(){
        $objectType = $this->data['object_type'];
        $objectId = $this->data['object_id'];

        $classMap = [
            'comment' => Comment::class
        ];
        $this->object = $classMap[$objectType]::find($objectId);
    }

}