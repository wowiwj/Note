<?php

namespace App\Http\Controllers\Web;

use App\Base\Fitters\DiscussionFilters;
use App\Models\Discussion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class DiscussionsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(DiscussionFilters $fitters)
    {
        $discussions = $this->getDiscussions($fitters);

        // https://stackoverflow.com/questions/17159273/laravel-pagination-links-not-including-other-get-parameters
        $discussions->appends(Input::except('page'));

        return view('discussions.index',compact('discussions'));
    }

    protected function getDiscussions(DiscussionFilters $fitters)
    {
        $discussions = Discussion::withCount('comments')->latest()->filter($fitters);

        return $discussions->paginate(10);

    }
}
