<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthenticateController extends ApiController
{

    public function login(Request $request){


        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|string'
        ]);

        $credentials = $request->only(['email','password']);

        if (Auth::attempt($credentials,true)) {

            if (Auth::user()->activated) {
                return $this->message('登录成功');
            }else{
                Auth::logout();

                return $this->failed('账号未激活，请使用邮件链接激活邮箱');
            }

        } else {

            return $this->failed('用户名或密码错误');
        }




    }


}
