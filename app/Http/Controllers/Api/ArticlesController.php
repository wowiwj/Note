<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends ApiController
{

    public function __construct()
    {
        parent::__construct();

        $this->middleware('auth:api');

    }

    public function store($category_id,Request $request)
    {
        $category = Category::find($category_id);

        $article = $category->articles()->create([
            'title' => $request->title,
            'content' => $request->body,
            'user_id' => Auth::user()->id
        ]);

        return $article->load('category');


        return $this->respondWithMessage('成功');


    }
}
