<?php


use App\Base\Handler\NotificationHandler;

if (! function_exists('alert')) {

    function alert($message = null, $level = 'success')
    {
        $flash = app('App\Http\Flash');
        if (func_num_args() == 0) {
            return $flash;
        }
        return $flash->message($message, $level);
    }
}


if (! function_exists('nav_is_active')) {

    function nav_is_active($name, $route = null)
    {
        if ($route == null) {
            return Route::currentRouteName() == $name ? 'is-active' : '';
        }
        return request()->url() == route($name, $route) ? 'is-active' : '';

    }
}

if (! function_exists('menu_is_active')) {

    function menu_is_active($name, $route = null)
    {
        if ($route == null) {
            return Route::currentRouteName() == $name ? 'is-active' : '';
        }
        return request()->url() == route($name, $route) ? 'is-active' : '';

    }
}


if (! function_exists('notification_parser')) {

    function notification_parser($data)
    {
        $handler = app(NotificationHandler::class);
        return $handler->make($data);
    }
}