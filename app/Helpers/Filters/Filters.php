<?php
namespace App\Helpers\Fitters;

use Illuminate\Http\Request;

abstract class Filters{

    protected $request;

    protected $builder;

    protected $filters = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($builder)
    {
        $this->builder = $builder;

        foreach ($this->getFitters() as $filter => $value){
            if (method_exists($this,$filter)){
                $this->$filter($value);
            }
        }
    }

    public function getFitters()
    {
        return $this->request->only($this->filters);
    }


}