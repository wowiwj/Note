<?php

namespace App\Helpers\Handler;


use App\Models\Comment;
use App\Models\User;

class NotificationHandler
{

    protected $data;

    public $type;

    public $from;

    public $message;

    public $object;

    public $link;

    public $content;

    public function make($data){
        $this->data = $data;

        $this->mapFrom();
        $this->mapObject();
        $this->setMessage();
        $this->setContent();
        $this->setLink();

        return $this;
    }

    private function mapFrom(){

        $fromType = $this->data['from_type'];
        $fromId = $this->data['from_id'];
        $classMap = [
            'user' => User::class
        ];

        $this->from = $classMap[$fromType]::find($fromId);
    }

    private function mapObject(){
        $objectType = $this->data['object_type'];
        $objectId = $this->data['object_id'];

        $classMap = [
            'comment' => Comment::class
        ];
        $this->object = $classMap[$objectType]::find($objectId);
    }

    private function setMessage(){

        $message = $this->data['message'];

        $message = "$message <a href=''>{$this->object->commentable->title}</a>";

        $this->message = $message;
    }

    private function setContent(){
        if (empty($this->data['content']))
        {
            return;
        }

        $content = $this->data['content'];
        $this->content = $content;
    }

    private function setLink(){
        $link = $this->data['link'];
        $this->link = $link;
    }


}