<?php

namespace App\Helpers\Handler;


use App\Models\Comment;
use App\Models\User;
use App\Notifications\NotificationMappable;

class NotificationHandler
{

    protected $notification;

    public $object;


    public function make($notification){
        $this->notification = $notification;

        return $this->mapObject();

    }

    private function mapObject(){

        $type = $this->notification->type;
        $class = new \ReflectionClass($type);
        if ($class->implementsInterface(NotificationMappable::class)){
            return $type::map($this->notification->data);
        }

        return null;
    }

}