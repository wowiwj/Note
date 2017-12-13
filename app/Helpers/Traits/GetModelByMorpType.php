<?php
namespace App\Helpers\Traits;
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

}