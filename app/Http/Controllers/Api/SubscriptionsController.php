<?php

namespace App\Http\Controllers\Api;

use App\Base\Exceptions\SubscribeException;
use App\Http\Requests\SubscribeRequest;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionsController extends ApiController
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }


    public function store(SubscribeRequest $request){

        try{
            $request->subscribe();
        }catch(SubscribeException $e){
            return $e->response();
        }

        $request->getModel()->notify();

        return $this->message('点赞成功');
    }


    public function destroy(SubscribeRequest $request){

        try{
            $request->unsubscribe();
        }catch(SubscribeException $e){
            return $e->response();
        }
        return $this->message('取消点赞成功');
    }
}
