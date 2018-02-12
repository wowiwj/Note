<?php

namespace App\Http\Requests;

use App\Base\Traits\GetModelByMorpType;
use App\Models\Article;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Comment;

class FavoriteRequest extends FormRequest
{

    use GetModelByMorpType;

    protected function map()
    {
        return [
            'comment' => Comment::class,
            'article' => Article::class
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    // 用户点赞
    public function store()
    {
        $model = $this->getModel();
        return $model->favorite();
    }

    // 用户取消点赞
    public function destroy()
    {
        $model = $this->getModel();
        if($model->isFavorited){
            $model->unfavorite();
        }
    }

}
