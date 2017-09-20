<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:tags',
            'slug' => 'required|unique:tags',
            'message' => 'required'
        ]);

        Tag::create($request->only('name','slug','message'));

        alert('标签添加成功');
        return back();
    }

}
