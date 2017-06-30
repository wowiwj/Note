<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index(){

        $users = User::paginate(20);

        return view('admin.users.index',compact('users'));

    }

    public function edit(User $user){

        return view('admin.users.edit',compact('user'));

    }


    public function update(Request $request,User $user){

        $this->validate($request,[
            'name' => 'string',
            'signature' => 'max:26',
            'email' => 'email'
        ]);

        $user->update($request->only(['name','signature','email']));

        flash('修改成功')->success();

        return back();
    }

    public function destroy(User $user){

        $user->delete();

        flash('删除成功')->success();

        return back();

    }


}
