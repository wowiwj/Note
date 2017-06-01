<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);

        return view('articles.index',compact('articles'));
    }

    public function show($category,Article $article)
    {

        $article->load('comments');

        return view('articles.show',compact('article'));

    }

    public function create()
    {
        return view('articles.create');
    }



//    public function store(Request $request)
//    {
//
//        return $request->all();
//
//    }

    public function  destroy(Article $article)
    {
        $this->authorize('update',$article);

        $article->delete();

        $article->comments->each->delete();

        alert('文章删除成功','success');

        return redirect('/');

        dd($article);

    }

}
