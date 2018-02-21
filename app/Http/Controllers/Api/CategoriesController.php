<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoriesController extends ApiController
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate();
        return CategoryResource::collection($categories);
    }

    public function all()
    {
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }
}
