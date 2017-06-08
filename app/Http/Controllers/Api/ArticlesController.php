<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends ApiController
{

    public function __construct()
    {
        parent::__construct();

        $this->middleware('auth:api',['except' => 'show']);

    }

    public function show(Article $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required|exists:categories,id',
            'title' => 'required',
            'body' => 'required'
        ]);
        $article = Article::create([
            'title' => $request->title,
            'content' => $request->body,
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id
        ]);

        return $article->load('category');


        return $this->respondWithMessage('成功');


    }


    public function update(Article $article,Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required|exists:categories,id',
            'title' => 'required',
            'content' => 'required'
        ]);

        $this->authorize('update',$article);
        $article->update($request->all());
        return $article;
        
    }
}
