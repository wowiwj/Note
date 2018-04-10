<?php

namespace App\Http\Controllers\Web;

use App\Models\Series;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeriesController extends Controller
{
    public function index(){

        $series = Series::query()->whereHas('lessons')->latest()->paginate('20');

        return view('series.index',compact('series'));
    }


    // 显示系列课程的列表
    public function show(Series $series){

        $series->load('lessons');

        return view('series.show',compact('series'));
    }
}
