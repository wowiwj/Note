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
        return view('drafts.index',compact('user'));
    }

    public function show($draft){

        return view('drafts.show');
    }

    public function edit(Draft $draft){

        return view('drafts.edit',compact('draft'));

        return $draft;

    }
}
