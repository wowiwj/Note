<?php

namespace App\Http\Controllers\Api;

use App\Jobs\TranslateSlug;
use App\Models\Article;
use App\Models\Draft;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ArticleResource;

class ArticlesController extends ApiController
{

    public function __construct()
    {
        $this->middleware('auth:api',['except' => ['show','index']]);

    }

    public function index(){

        $articles = Article::orderBy('created_at', 'desc')->paginate(20);
        return ArticleResource::collection($articles);
    }



    public function show(Article $article)
    {
        return new ArticleResource($article);
    }




    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required|exists:categories,id',
            'draft_ref' => 'required',
            'is_original' => 'required',
            'tags' => ''
        ]);

        $ref = $request->get('draft_ref');
        $draft = Draft::getWithRef($ref);
        $draft = $draft->getLastUpdate();

        $tags = json_decode($request->tags,true);
        $user = Auth::user();

        $article = Article::query()->create([
            'title' => $draft->title,
            'content' => $draft->body,
            'draft_id' => $draft->id,
            'user_id' => $user->id,
            'category_id' => $request->category_id,
            'is_original' => $request->is_original

        ]);

        dispatch(new TranslateSlug($article,'title'));

        Draft::relationIdWithRef($ref,$article->id);

        $article->subscribe();

        $article = $article->syncTags($tags)->load('category');
        return new ArticleResource($article);

    }


    public function update(Article $article,Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required|exists:categories,id',
            'draft_ref' => 'required',
            'is_original' => 'required',
            'tags' => ''
        ]);

        $tags = json_decode($request->tags,true);

        $ref = $request->get('draft_ref');
        $draft = Draft::getWithRef($ref);
        $draft = $draft->getLastUpdate();

        $this->authorize('update',$article);
        $article->update([
            'title' => $draft->title,
            'content' => $draft->body,
            'category_id' => $request->category_id,
            'is_original' => $request->is_original,
            'draft_id' => $draft->id
        ]);
        $article = $article->syncTags($tags);
        return new ArticleResource($article);
    }


    // 删除文章
    public function destroy(Article $article){

        $this->authorize('update',$article);
        $article->delete();
        return $this->message('删除成功');

    }
}
