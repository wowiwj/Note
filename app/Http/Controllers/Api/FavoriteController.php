<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Exceptions\FavoriteException;
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

        try{
            $request->store();
        }catch(FavoriteException $e){
            return $e->response();
        }

        $request->getModel()->notifyFavorited();

        return $this->message('点赞成功');
        
    }

    // 用户取消点赞
    public function destroy(FavoriteRequest $request){

        try{
            $request->destroy();
        }catch(FavoriteException $e){
            return $e->response();
        }

        return $this->message('取消点赞成功');

    }


}
