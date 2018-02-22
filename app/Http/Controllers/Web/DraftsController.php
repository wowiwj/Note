<?php

namespace App\Http\Controllers\Web;

use App\Models\Draft;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DraftsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $user = Auth::user();

        $drafts = $user->drafts()->whereNull('parent_id')->latest()->paginate(20);

        return view('drafts.index',compact('user','drafts'));
    }

    public function show($draft){

        return view('drafts.show');
    }

    public function edit(Draft $draft){

        return view('drafts.edit',compact('draft'));

        return $draft;

    }

    public function destroy(Draft $draft){
        $draft->delete();
        flash('删除成功');
        return back();
    }
}
