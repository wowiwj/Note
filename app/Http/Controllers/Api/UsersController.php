<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Handler\ImageUploadHandler;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends ApiController
{
    public function __construct()
    {
        parent::__construct();

        $this->middleware('auth:api');
    }

    public function uploadAvatar(User $user,Request $request){

        return $user;
        $imageHander = new ImageUploadHandler();

        if ($request->hasFile('img')){

            $avatar = $request->file('img');
            return $imageHander->uploadAvatar($avatar,$user);


        }
        return $this->respondWithSuccess('哈哈');

    }
}
