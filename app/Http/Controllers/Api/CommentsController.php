<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Comment;
use App\Transformers\CommentTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends ApiController
{

     public function __construct()
    {
        parent::__construct();

        $this->middleware('auth:api',['except' => 'index']);

    }

    public function index($category,Article $article)
    {
        $comments = $article->comments()->paginate(15);
        return $this->respondWithPaginator($comments,new CommentTransformer);
    }

    public function store($catrgory_id,Article $article,Request $request)
    {
        $this->validate($request,[
            'body' => 'required'
        ]);
        
        $comment = $article->comments()->create([
            'content' => $request->body,
            'user_id' => Auth::user()->id
        ]);

        return $this->respondWithItem($comment,new CommentTransformer);
    }
}
