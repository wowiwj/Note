<?php

namespace App\Http\Controllers\Web;

use App\Helpers\Fitters\ArticleFilters;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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

    public function show($category,Article $article)
    {

        $article->load(['comments','favorites' => function($query){
            $query->orderBy('created_at', 'desc')->limit(10);
        }]);

//        return $article;

        if (auth()->check()){
            auth()->user()->read($article);
        }

        return view('articles.show',compact('article'));

    }



    public function create()
    {
        return view('articles.create');
    }



    public function edit(Article $article)
    {
        return view('articles.edit',compact('article'));
    }

    public function update(){


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
