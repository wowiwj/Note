<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Service\Mention;
use App\Models\User;
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
        $comments = $article->comments()->paginate(20);
        return $this->respondWithPaginator($comments,new CommentTransformer);
    }

    public function store($catrgory_id,Article $article,Request $request)
    {
        $this->validate($request,[
            'body' => 'required'
        ]);


        $mention = new Mention();
        $parsed_body = $mention->parse($request->body);

        
        $comment = $article->comments()->create([
            'content' => $parsed_body,
            'user_id' => Auth::user()->id
        ]);

        return $this->respondWithItem($comment,new CommentTransformer);
    }

    public function destroy(Comment $comment){

         $this->authorize('update',$comment);

         $comment->delete();

         return $this->respondWithMessage('删除成功');

    }
}
