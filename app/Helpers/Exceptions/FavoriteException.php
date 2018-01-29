<?php

namespace App\Helpers\Exceptions;

use App\Api\Helpers\Api\ApiResponse;
use Exception;
use Throwable;

class FavoriteException extends Exception
{
    use ApiResponse;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function response(){

        return $this->failed($this->message,$this->code);

    }


}