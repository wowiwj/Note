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
}
