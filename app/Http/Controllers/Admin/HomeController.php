<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Discussion;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){

        $userCount = User::query()->count();

        $articleCount = Article::query()->count();

        $discussionCount = Discussion::query()->count();

        $commentCount = Comment::query()->count();



        return view('admin.home.index',compact('userCount','articleCount','discussionCount','commentCount'));

    }
}
