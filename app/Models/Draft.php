<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Draft extends Model
{
    protected $guarded = [];

    protected $hidden = ['id'];

    protected $appends = ['ref'];

    public function relation()
    {
        return $this->morphTo();
    }


    public function relations()
    {
        return $this->morphMany(Draft::class, 'relation');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function resolveRouteBinding($value)
    {
        $value = Hashids::decode($value);
        return parent::resolveRouteBinding($value);
    }

    public function getRefAttribute(){
        return Hashids::encode($this->id);
    }


}
