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
        $this->authorize('');
        
    }

    // 用户取消点赞
    public function destroy(){


    }


}
