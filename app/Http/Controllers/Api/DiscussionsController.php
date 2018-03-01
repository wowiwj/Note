<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\DiscussionResource;
use App\Jobs\TranslateSlug;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Discussion;
use App\Models\Draft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionsController extends ApiController
{

    public function __construct()
    {
        $this->middleware('auth:api',['except' => ['show','index']]);
    }

    public function store(Request $request){

        $this->validate($request,[
            'draft_ref' => 'required',
            'tags' => ''
        ]);

        $ref = $request->get('draft_ref');
        $draft = Draft::getWithRef($ref);
        $draft = $draft->getLastUpdate();

        $tags = json_decode($request->tags,true);
        $user = Auth::user();

        $discussion = Discussion::create([
            'title' => $draft->title,
            'content' => $draft->body,
            'draft_id' => $draft->id,
            'user_id' => $user->id
        ]);

        dispatch(new TranslateSlug($discussion,'title'));

        Draft::relationIdWithRef($ref,$discussion->id);

        $discussion->subscribe();

        $discussion = $discussion->syncTags($tags);
        return new DiscussionResource($discussion);

    }

    public function bestAnswer(Discussion $discussion,Request $request){
        $this->validate($request,[
            'comment_id' => 'required:exists:comments,id'
        ]);

        $this->authorize('update',$discussion);
        $user = Auth::user();

        $commentId = $request->get('comment_id');
        if (! $discussion->hasComment($commentId)){
            return $this->failed('请求非法');
        }
        $comment = Comment::query()->find($commentId);
        $discussion->solved_id = $commentId;
        $discussion->save();

        $comment->notifyBestAnswer();

        return new DiscussionResource($discussion);

    }

    public function update(Discussion $discussion,Request $request)
    {
        $this->validate($request,[
            'draft_ref' => 'required',
            'tags' => ''
        ]);

        $tags = json_decode($request->tags,true);

        $ref = $request->get('draft_ref');
        $draft = Draft::getWithRef($ref);
        $draft = $draft->getLastUpdate();

        $this->authorize('update',$draft);
        $discussion->update([
            'title' => $draft->title,
            'content' => $draft->body,
            'draft_id' => $draft->id
        ]);
        $discussion = $discussion->syncTags($tags);
        return new DiscussionResource($discussion);
    }

    // 删除文章
    public function destroy(Discussion $discussion){

        $this->authorize('update',$discussion);
        $discussion->delete();
        return $this->message('删除成功');

    }

}