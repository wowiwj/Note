<?php

namespace App\Http\Controllers\Web;

use App\Models\Lesson;
use App\Models\Series;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonsController extends Controller
{


    public function show(Series $series,Lesson $lesson){

        //return $lesson;

        return view('lessons.show',compact('lesson'));

    }
}
