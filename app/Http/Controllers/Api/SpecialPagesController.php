<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SpecialPageResource;
use App\Models\SpecialPage;
use Illuminate\Http\Request;

class SpecialPagesController extends ApiController
{
    public function __construct()
    {
        $this->middleware(['auth:api','admin'],['except' => ['show','index']]);

    }

    public function show(SpecialPage $page){

        return new SpecialPageResource($page);
    }




    public function store(Request $request){
        $this->validate($request,[
            'isShowNav' => 'required',
            'title' => 'required',
            'route' => 'required',
            'body' => 'required'
        ]);

        $page =  SpecialPage::create([
            'show_nav' => $request->isShowNav,
            'title' => $request->title,
            'body' => $request->body,
            'route' => $request->route
        ]);
        return new SpecialPageResource($page);
    }

    public function update(Request $request,SpecialPage $page){

        $this->validate($request,[
            'isShowNav' => 'required',
            'title' => 'required',
            'route' => 'required',
            'body' => 'required'
        ]);

        $page->update([
            'title' => $request->title,
            'body' => $request->get('body'),
            'route' => $request->route,
            'show_nav' => $request->isShowNav
        ]);

        return new SpecialPageResource($page);

    }


}
