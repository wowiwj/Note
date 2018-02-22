<?php
namespace App\Notifications;


 interface NotificationMappable
{
    public static function map($data);
}