<?php
namespace App\Api\Helpers\OAuth;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OAuthManager
{

    protected $driver;

    public function __construct($driver)
    {
        $this->driver = $driver;
    }


    public function auth($user){

        $method = 'authWith'.ucfirst($this->driver);
        if (! method_exists($this,$method)){
            return false;
        }
        return $this->$method($user);

    }

    protected function authWithQq($user){

        // 如果已经存在 -> 登录
        $current_user = User::where('qq_openid',$user->id)->first();
        if ($current_user){
            Auth::login($current_user);
            return $current_user;
        }
        // 创建用户
        // 判断有重复昵称则拼接随机字符串

        $username = $user->nickname;
        if (User::query()->where('name',$user->nickname)->first()){
            $username = $username.'_'.str_random(5);
        }

        $current_user = User::create([
            'qq_openid' =>$user->id,
            'name' => $username,
            'email' => $user->email ?? 'null@null.com',
            'activated' => 1,
            'avatar' => $user->avatar,
            'password' => ''

        ]);

        $current_user->activated = true;
        $current_user->save();
        Auth::login($current_user);
        return $current_user;


    }

    // 存储github用户信息
    protected function authWithGithub($user){

        // 如果已经存在 -> 登录
        $current_user = User::where('github_id',$user->id)->first();
        if ($current_user){
            Auth::login($current_user);
            return $current_user;
        }

        $username = $user->nickname;
        if (User::query()->where('name',$user->nickname)->first()){
            $username = $username.'_'.str_random(5);
        }
        // 创建用户
        $current_user = User::create([
            'name' => $username,
            'email' => $user->email,
            'activated' => 1,
            'avatar' => $user->avatar,
            'github_id' => $user->id,
            'github_name' => $user->name,
            'github_url' => $user->user['url'],
            'password' => ''

        ]);

        $current_user->activated = true;
        $current_user->save();
        Auth::login($current_user);
        return $current_user;
    }
}