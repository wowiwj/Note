<?php
namespace App\Base\Traits;
use App\Base\Exceptions\FavoriteException;

trait GetModelByMorpType
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()){
            case 'GET':
                return [];
            default:
                return [
                    'type' => 'required',
                    'type_id' => 'required'
                ];
        }
    }

    protected function map(){

        return [];
    }

    protected function getModelClass($type = null)
    {
        if ($type == null){
            $type = $this->get('type');
        }
        return $this->map()[$type];
    }

    public function getModel($type = null,$type_id = null)
    {


        $modelClass =  $this->getModelClass($type);
        if(! $modelClass){
            throw new FavoriteException('type参数有误',400);
        }
        $model = $modelClass::find($type_id ?? $this->type_id);

        if(! $model){
            throw new FavoriteException('模型未找到',404);
        }
        return $model;

    }

}