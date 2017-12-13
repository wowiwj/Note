<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\FavoriteRequest;

class FavoriteController extends ApiController
{

    public function __construct()
    {
        $this->middleware('auth:api');

    }
    
    // 用户点赞
    public function store(FavoriteRequest $request)
    {
        return $this->tryOptionToResponse(function () use ($request) {
                $request->store();
                }, '点赞成功');
        
    }

    // 用户取消点赞
    public function destroy(FavoriteRequest $request){

        return $this->tryOptionToResponse(function () use ($request) {
                $request->destroy();
                }, '取消点赞成功');

    }


}
