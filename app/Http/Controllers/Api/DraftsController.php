<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\DraftResource;
use App\Models\Draft;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DraftsController extends Controller
{
    public function show(Draft $draft){

        return new DraftResource($draft->load('user'));
    }
}
