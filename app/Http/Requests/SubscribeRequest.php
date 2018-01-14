<?php

namespace App\Http\Requests;

use App\Helpers\Traits\GetModelByMorpType;
use App\Http\Resources\Article;
use Illuminate\Foundation\Http\FormRequest;

class SubscribeRequest extends FormRequest
{
    use GetModelByMorpType;


    protected function map()
    {
        return [
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
    public function subscribe()
    {
        $model = $this->getModel();
        return $model->subscribe();
    }

    // 用户取消点赞
    public function unsubscribe()
    {
        $model = $this->getModel();
        if($model->isSubscribed){
            $model->unsubscribe();
        }
    }
}
