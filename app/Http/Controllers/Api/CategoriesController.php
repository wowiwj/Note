<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Transformers\CategoryTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends ApiController
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate();

        return $this->respondWithPaginator($categories, new CategoryTransformer());

    }

    public function all()
    {
        $categories = Category::all();

        return $this->respondWithCollection($categories,new CategoryTransformer());
    }
}
