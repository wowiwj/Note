<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Comment;

class FavoriteRequest extends FormRequest
{

    protected $map = [
        'comment' => Comment::class
    ];
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'required',
            'type_id' => 'required'
        ];
    }


    protected function getModelClass()
    {
        return $this->map[$this->get('type')];
    }

    protected function getModel()
    {
        $modelClass = $this->getModelClass();
        if(! $modelClass){
            throw new \Exception('type参数有误',400);
        }
        $model = $modelClass::find($this->type_id);

        if(! $model){
            throw new \Exception('模型未找到',404);
        }
        return $model;
        
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
