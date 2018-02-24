<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\DiscussionResource;
use App\Models\Article;
use App\Models\Discussion;
use App\Models\Draft;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DiscussionsController extends Controller
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

        Draft::relationIdWithRef($ref,$discussion->id);

        $discussion->subscribe();

        $discussion = $discussion->syncTags($tags);
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

}