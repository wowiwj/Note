<?php
namespace App\Base\Exceptions;
use App\Base\Api\ApiResponse;
use Exception;
use Throwable;

class SubscribeException extends Exception
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