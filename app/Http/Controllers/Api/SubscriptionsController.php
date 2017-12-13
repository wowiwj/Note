<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\SubscribeRequest;
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

        return $this->tryOptionToResponse(
            $request->subscribe,
            '点赞成功'
        );

    }


    public function destroy(){


    }
}
