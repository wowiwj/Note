<?php

namespace App\Http\Controllers\Api;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Resources\TagResource as TagCollection;

class TagsController extends Controller
{

    public function index(){

        $q = Input::get('q');

        $tags = Tag::where('name','like','%'.$q.'%')
            ->orWhere('slug','like','%'.$q.'%')
            ->paginate(10);

        return TagCollection::collection($tags);

    }


}
