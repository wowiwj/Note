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



function navIsActive($name)
{
    return Route::currentRouteName() == $name ? 'active' : '';
}