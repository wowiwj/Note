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

    protected function storeWithQq($user){


    }

    // 存储github用户信息
    protected function authWithGithub($user){

        // 如果已经存在 -> 登录
        $current_user = User::where('github_id',$user->id)->first();
        if ($current_user){
            Auth::login($current_user);
            return $current_user;
        }
        // 创建用户
        $current_user = User::create([
            'name' => $user->nickname,
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