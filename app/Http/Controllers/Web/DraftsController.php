<?php

namespace App\Http\Controllers\Web;

use App\Models\Draft;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DraftsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($draft){

//        return $draft;
        return view('drafts.show');
    }

    public function edit(Draft $draft){

        return view('drafts.edit',compact('draft'));

        return $draft;

    }
}
