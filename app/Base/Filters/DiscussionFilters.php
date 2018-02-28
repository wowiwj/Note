<?php

namespace App\Base\Fitters;


use App\Models\User;
use Carbon\Carbon;

class DiscussionFilters extends Filters
{

    protected $filters = [
        'by',
        'popular',
        'uncommented',
        'tag',
        'solved',
        'trending',
        'by_answer'
    ];

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

    public function tag($name){

        return $this->builder->whereHas('tags',function ($query) use ($name){
            $query->where('slug',$name)->orWhere('name',$name);
        });
    }

    public function solved($status){

        if ($status == 0){
            return $this->builder->whereDoesntHave('bestAnswer');

        }
        return $this->builder->whereHas('bestAnswer');
    }

    public function trending(){
        $this->builder->getQuery()->orders = [];
        return $this->builder
            ->where('created_at','>',Carbon::now()->subDays(7))
            ->withCount('comments')
            ->orderBy('comments_count','desc');
    }

    public function by_answer($username){
        $user = User::where('name',$username)->firstOrFail();

        return $this->builder->whereHas('comments',function ($query) use ($user) {
            $query->where('user_id', '=', $user->id);
        });

    }

}