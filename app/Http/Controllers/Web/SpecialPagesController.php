<?php

namespace App\Http\Controllers\Web;

use App\Models\SpecialPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialPagesController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth','admin'])->except(['show']);
    }


    public function index(){



    }

    public function edit(SpecialPage $page){

        return view('special_pages.edit',compact('page'));
    }

    public function show($name){

        $page = SpecialPage::where('route',$name)->firstOrFail();

        return view('special_pages.show',compact('page'));
    }

    public function create(){

        return view('special_pages.create');
    }


    public function store(){



    }

    public function destroy(SpecialPage $page){


        $page->delete();

        $page->comments->each->delete();

        alert('页面删除成功','success');

        return redirect('/');
    }



}
