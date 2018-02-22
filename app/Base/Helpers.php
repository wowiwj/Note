<?php

function alert($message=null,$level='success')
{

    $flash = app('App\Http\Flash');


    if (func_num_args() == 0)
    {
        return $flash;
    }


    return $flash->message($message,$level);

}



function navIsActive($name,$route=null)
{
    if ($route == null){
        return Route::currentRouteName() == $name ? 'is-active' : '';
    }
    return request()->url() == route($name,$route) ? 'is-active' : '';

}

function menuIsActive($name,$route=null)
{
    if ($route == null){
        return Route::currentRouteName() == $name ? 'is-active' : '';
    }
    return request()->url() == route($name,$route) ? 'is-active' : '';

}

function notificationParser($data){

    $handler = app(\App\Base\Handler\NotificationHandler::class);

    return $handler->make($data);

}