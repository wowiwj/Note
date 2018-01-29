<?php
/**
 * Created by PhpStorm.
 * User: wangju
 * Date: 2018/1/19
 * Time: 下午4:21
 */

namespace App\Notifications;


 interface NotificationMappable
{
    public static function map($data);
}