<?php

namespace App\Http\Controllers\Api;

use App\Models\SpecialPage;
use App\Transformers\SpecialPageTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SpecialPagesController extends ApiController
{
    public function __construct()
    {
        parent::__construct();

        $this->middleware(['auth:api','admin'],['except' => ['show','index']]);

    }

    public function show(SpecialPage $page){

        return $this->respondWithItem($page,new SpecialPageTransformer);

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


        return $this->respondWithItem($page,new SpecialPageTransformer);

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

        return $this->respondWithItem($page,new SpecialPageTransformer);


    }


}
