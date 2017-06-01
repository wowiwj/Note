<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::withCount('articles')
            ->orderBy('articles_count','desc')
            ->limit(10)
            ->get();



        return $categories;
    }
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:categories',
            'slug' => 'required|unique:categories',
        ]);

        Category::create($request->only('name','slug'));

        alert('分类添加成功');
        return back();

    }
}
