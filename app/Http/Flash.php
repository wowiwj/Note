<?php
namespace App\Http;
use App\Models\User;

class Flash{

    public function create($message,$level,$key="flash")
    {

        session()->flash($key,[
            'text'=>$message,
            'level'=>$level
        ]);

    }

    public function message($message,$level='info')
    {

        $this->create($message,$level);

    }

    public function info($message){
        $this->message($message);
    }

    public function success($message){
        $this->message($message,'success');
    }

    public function error($title,$message){
        $this->message($message,'error');
    }

    public function overlay($message,$level='info'){
        $this->create($message,$level,'flash_message_overlay');
    }

}