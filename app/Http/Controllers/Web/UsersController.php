<?php

namespace App\Http\Controllers\Web;


use App\Http\Requests\UpdateUserRequest;
use App\Models\Activity;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function show(User $user){

        return view('users.show',[
            'user'=>$user,
            'activities' => Activity::feed($user)
        ]);
    }


    public function edit(User $user){
        return view('users.edit',compact('user'));
    }

    public function editAvatar(User $user){
        return view('users.editAvatar',compact('user'));
    }

    public function update(User $user,UpdateUserRequest $request){

        $this->authorize('update',$user);

        $request->updateUser($user);
        alert('修改成功','success');
        return back();

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $user->sendVerifyEmail();

        flash('验证邮件已发送到你的注册邮箱上，请注意查收。','success');


        return back();

    }


    public function verify($token)
    {

        $user = User::where('activation_token',$token)->first();

        if (is_null($user)){

            alert('验证token失败', 'danger');
            return redirect('/');

        }

        $user->activated = true;
        $user->activation_token = null;
        $user->save();
        alert('欢迎回来','success');

        Auth::login($user);

        return redirect('/');

    }


}
