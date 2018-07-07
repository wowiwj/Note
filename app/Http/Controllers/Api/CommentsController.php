<?php

namespace App\Http\Controllers\Api;

use App\Base\Service\Mention;
use App\Models\Discussion;
use App\Models\SpecialPage;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;

class CommentsController extends ApiController
{

     public function __construct()
    {
        $this->middleware('auth:api')->except(['index','pageComments','discussionComments','bestAnswer']);

    }

    public function index($category,Article $article)
    {
        $comments = $article->comments()->paginate(20);

        return CommentResource::collection($comments);
    }

    public function discussionComments(Discussion $discussion){
        $comments = $discussion->comments()->paginate(20);
        return CommentResource::collection($comments);

    }

    public function bestAnswer(Discussion $discussion){

        $bestAnswer = $discussion->bestAnswer;
        if (empty($bestAnswer)){
            return $this->message('没有最佳答案');
        }
        return new CommentResource($bestAnswer);
    }

    public function storeDiscussionComments(Discussion $discussion,Request $request){
        $this->validate($request,[
            'body' => 'required'
        ]);

        $mention = new Mention();
        $parsed_body = $mention->parse($request->body);

        $comment = $discussion->comments()->create([
            'content' => $parsed_body,
            'user_id' => Auth::user()->id
        ]);
        return new CommentResource($comment);

    }

    public function pageComments($name){

        $page = SpecialPage::where('route',$name)->firstOrFail();

        $comments = $page->comments()->paginate(20);
        return CommentResource::collection($comments);

    }

    public function storePageComment(Request $request,$name){
        $this->validate($request,[
            'body' => 'required'
        ]);

        $mention = new Mention();
        $parsed_body = $mention->parse(clean($request->body));

        $page = $page = SpecialPage::where('route',$name)->firstOrFail();

        $comment = $page->comments()->create([
            'content' => $parsed_body,
            'user_id' => Auth::user()->id
        ]);
        return new CommentResource($comment);

    }


    public function store($catrgory_id,Article $article,Request $request)
    {
        $this->validate($request,[
            'body' => 'required'
        ]);

        $parsed_body = app(Mention::class)->parse(clean($request->body));

        $comment = $article->comments()->create([
            'content' => $parsed_body,
            'user_id' => Auth::user()->id
        ]);

        $article->subscriptions->filter(function ($subscribe) use ($comment){
            return $subscribe->user->id != $comment->user->id;
        })->each->notify($comment);


        return new CommentResource($comment);
    }

    public function destroy(Comment $comment){

         $this->authorize('update',$comment);

         $comment->delete();

         return $this->message('删除成功');

    }
}
