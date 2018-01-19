<?php
namespace App\Helpers\Traits;
use App\Helpers\Exceptions\FavoriteException;

trait GetModelByMorpType
{
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

    protected function map(){

        return [];
    }

    protected function getModelClass()
    {
        $type = $this->get('type');
        return $this->map()[$type];
    }

    public function getModel()
    {
        $modelClass = $this->getModelClass();
        if(! $modelClass){
            throw new FavoriteException('type参数有误',400);
        }
        $model = $modelClass::find($this->type_id);

        if(! $model){
            throw new FavoriteException('模型未找到',404);
        }
        return $model;

    }

}