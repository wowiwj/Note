<?php

namespace App\Http\Controllers\Web;

use App\Base\Fitters\ArticleFilters;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Draft;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Ramsey\Uuid\Uuid;
use Vinkla\Hashids\Facades\Hashids;

class ArticlesController extends Controller
{

    function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(Category $category, ArticleFilters $fitters)
    {
        $articles = $this->getArticles($category,$fitters);

        // https://stackoverflow.com/questions/17159273/laravel-pagination-links-not-including-other-get-parameters
        $articles->appends(Input::except('page'));


//        return $articles;

        return view('articles.index',compact('articles'));
    }

    protected function getArticles(Category $category, ArticleFilters $fitters)
    {
        $article = Article::withCount('comments')->latest()->filter($fitters);

//        return $article;

        if ($category->exists){
            $article->where('category_id',$category->id);
        }
        return $article->paginate(10);

    }

    public function show($category,Article $article,Request $request)
    {

        // URL 矫正
        if ( ! empty($article->slug) && $article->slug != $request->slug) {
            return redirect($article->path(), 301);
        }
        $article->load(['comments']);
//        return $article;

        if (auth()->check()){
            auth()->user()->readArticle($article);
        }

        return view('articles.show',compact('article'));

    }


    /**
     *
     * @var \App\Models\User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $draft = Auth::user()->drafts()->create([
            'title' => Carbon::now()->toDateTimeString(),
            'body' => '',
            'relation_type' => Article::class
        ]);


        return redirect()->route('drafts.edit',$draft->ref);
    }



    public function edit(Article $article)
    {
        $draft =$article->currentDraft;
        if (empty($draft)){
            $draft = Auth::user()->drafts()->create([
                'title' => $article->title,
                'body' => json_decode($article->body)->raw,
                'relation_type' => Article::class,
                'relation_id' => $article->id
            ]);
        }
        return redirect()->route('drafts.edit',$draft->ref);

    }


    public function  destroy(Article $article)
    {
        $this->authorize('update',$article);

        $article->delete();

        $article->comments->each->delete();

        alert('文章删除成功','success');

        return redirect('/');

    }



}
