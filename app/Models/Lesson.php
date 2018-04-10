<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = [];

    public function series(){
        return $this->belongsTo(Series::class);
    }

    public function path($params = [])
    {
        return route('lessons.show', array_merge([$this->series->id, $this->id,$this->slug], $params));
    }
}
