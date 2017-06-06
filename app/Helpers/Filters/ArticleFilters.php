<?php
/**
 * Created by PhpStorm.
 * User: wangju
 * Date: 2017/6/4
 * Time: 下午10:31
 */

namespace App\Helpers\Fitters;


use App\Models\User;

class ArticleFilters extends Filters
{
    protected $filters = ['by','popular','uncommented',''];

    protected function by($username)
    {
        $user = User::where('name',$username)->firstOrFail();

        return $this->builder->where('user_id',$user->id);
    }

    protected function popular()
    {
        $this->builder->getQuery()->orders = [];

        return $this->builder
            ->withCount('comments')
            ->orderBy('comments_count','desc');
    }

    protected function uncommented(){
        $this->builder->getQuery()->orders = [];
        return $this->builder
            ->has('comments','=',0);
    }

}