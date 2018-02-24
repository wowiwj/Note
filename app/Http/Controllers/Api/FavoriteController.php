<?php

namespace App\Http\Controllers\Api;

use App\Base\Exceptions\FavoriteException;
use App\Http\Resources\FavoriteResource;
use App\Http\Requests\FavoriteRequest;
use Illuminate\Support\Facades\Input;

class FavoriteController extends ApiController
{

    public function __construct()
    {
        $this->middleware('auth:api')->except('index');

    }

    public function index($type,$type_id,FavoriteRequest $request){

        $limit = Input::get('limit') ?: 20;
        $model = $request->getModel($type,$type_id);

        $favorites = $model->favorites()->with('user')->paginate($limit);
        return FavoriteResource::collection($favorites);
    }
    
    // 用户点赞
    public function store(FavoriteRequest $request)
    {

        try{
            $favorite = $request->store();
        }catch(FavoriteException $e){
            return $e->response();
        }

        $request->getModel()->notifyFavorited();

        return new FavoriteResource($favorite->load('user'));
        
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
