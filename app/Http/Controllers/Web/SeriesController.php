<?php

namespace App\Http\Controllers\Web;

use App\Models\Series;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeriesController extends Controller
{
    public function index(){

        $series = Series::query()->latest()->paginate('20');

        return view('series.index',compact('series'));
    }
}
