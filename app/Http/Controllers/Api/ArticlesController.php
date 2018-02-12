<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Transformers\ArticleTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Article as ArticleCollection;

class ArticlesController extends ApiController
{

    public function __construct()
    {
        parent::__construct();

        $this->middleware('auth:api',['except' => ['show','index']]);

    }

    public function index(){


        $articles = Article::orderBy('created_at', 'desc')->paginate(20);

        return $this->respondWithPaginator($articles,new ArticleTransformer);

    }



    public function show(Article $article)
    {
        return new ArticleCollection($article);
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required|exists:categories,id',
            'title' => 'required',
            'body' => 'required',
            'is_original' => 'required',
            'tags' => ''
        ]);

        $tags = json_decode($request->tags,true);

        $user = Auth::user();

        $article = Article::create([
            'title' => $request->title,
            'content' => $request->body,
            'user_id' => $user->id,
            'category_id' => $request->category_id,
            'is_original' => $request->is_original
        ]);

        $article->subscribe();

        return $article->syncTags($tags)->load('category');

    }


    public function update(Article $article,Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required|exists:categories,id',
            'title' => 'required',
            'content' => 'required',
            'is_original' => 'required',
            'tags' => ''
        ]);

        $tags = json_decode($request->tags,true);


        $this->authorize('update',$article);
        $article->update([
            'title' => $request->title,
            'content' => $request->get('content'),
            'category_id' => $request->category_id,
            'is_original' => $request->is_original
        ]);
        return $article->syncTags($tags);
        
    }


    // 删除文章
    public function destroy(Article $article){

        $this->authorize('update',$article);

        $article->delete();

        return $this->message('删除成功');

    }
}
