<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $guarded = [];

    public function path($params = [])
    {
        return route('series.show', array_merge([$this->id, $this->slug], $params));
    }

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
}
