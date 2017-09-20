<?php

namespace App\Http\Controllers\Web;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Article $article,Request $request)
    {
        $this->validate($request,[
            'body' => 'required'
        ]);


        $article->comments()->create([
            'content' => $request->body,
            'user_id' => Auth::user()->id
        ]);

        alert('评论添加成功','success');

        return back();




    }
}
