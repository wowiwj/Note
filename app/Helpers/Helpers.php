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
        return Route::currentRouteName() == $name ? 'active' : '';
    }

//    echo request()->url();
//    echo '--';
//    echo route($name,$route);

    return request()->url() == route($name,$route) ? 'active' : '';

}

function menuIsActive($name,$route=null)
{
    if ($route == null){
        return Route::currentRouteName() == $name ? 'is-active' : '';
    }
    return request()->url() == route($name,$route) ? 'is-active' : '';

}