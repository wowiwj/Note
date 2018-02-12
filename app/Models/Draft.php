<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    protected $guarded = [];

    public function relation()
    {
        return $this->morphTo();
    }

}
