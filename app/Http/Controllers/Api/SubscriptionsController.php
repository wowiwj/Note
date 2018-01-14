<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Exceptions\SubscribeException;
use App\Http\Requests\SubscribeRequest;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionsController extends ApiController
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:api');
    }


    public function store(SubscribeRequest $request){

        try{
            $request->subscribe();
        }catch(SubscribeException $e){
            return $e->response();
        }
    }


    public function destroy(SubscribeRequest $request){

        try{
            $request->unsubscribe();
        }catch(SubscribeException $e){
            return $e->response();
        }
    }
}
